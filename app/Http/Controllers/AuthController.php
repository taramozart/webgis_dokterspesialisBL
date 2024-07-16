<?php

namespace App\Http\Controllers;

use App\Models\pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function LoginAdmin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->messages());
        }
        
        $data = pengguna::where('email', $request->email)->first();
        if ($data !== null) {
            if (Hash::check($request->password, $data->password)) {
                Auth::login($data);
                if ($data->otp != null) {
                    $data->update([
                        'otp' => null
                    ]);
                }

                return redirect()->route('data-baru-dokter');

            }
        }
        return back()->with('error', 'Email atau Katasandi salah');
    }

    public function logoutAdmin()
    {
        if (auth()->check()) {
            auth()->logout();
        }

        return redirect()->route('login-admin');
    }

    public function generateOtpAdmin(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->messages());
        }

        $data = pengguna::where('email', $request->email)->firstOrFail();

        if ($data !== null) {
            session()->put('email', $data->email);
            $data->update([
                'otp' => rand(100000, 999999)
            ]);
            return redirect()->route('otp-password-admin');
        }

        return back()->with('error', 'Email tidak ditemukan');
    }

    public function checkOtpAdmin(Request $request){
        $validator = Validator::make($request->all(), [
            'otp' => 'required|maxdigits:6',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->messages());
        }

        $data = pengguna::where('email', session()->get('email'))->firstOrFail();
        if ($data->otp == $request->otp) {
            session()->put('otp', $data->otp);
            return redirect()->route('password-baru-admin');
        }
        return back()->with('error', 'Kode OTP salah');
    }

    public function buatPasswordBaruAdmin(Request $request){
        $validator = Validator::make($request->all(), [
            'password_baru' => 'required|string',
            'konfirmasi_password_baru' => 'required|string',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->messages());
        }

        $data = pengguna::where('email', session()->get('email'))->firstOrFail();
        if ($request->password_baru == $request->konfirmasi_password_baru) {
            if($data->otp == session()->get('otp')){
                $data->update([
                    'password' => Hash::make($request->password_baru)
                ]);
                session()->forget('otp');
                session()->forget('email');
                return redirect()->route('login-admin');
            }
            return redirect()->route('otp-password-admin');
        }
        return back()->with('error', 'Konfirmasi Password Baru salah');
    }
}
