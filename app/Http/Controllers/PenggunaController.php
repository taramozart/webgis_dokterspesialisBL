<?php

namespace App\Http\Controllers;

use App\Models\pengguna;
use App\Models\role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PenggunaController extends Controller
{
    public function create_pengguna_dokter(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'nama' => 'required',
            'email' => 'required|email|unique:pengguna',
            'nomor_sip' => 'required',
            'password' => 'required|min:8',
            'konfirmasi_password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->messages());
        }

        if ($request->password == $request->konfirmasi_password) {
            pengguna::create([
                'nama' => $request->nama,
                'role_id' => 2,
                'email' => $request->email,
                'nomor_sip' => $request->nomor_sip,
                'password' => Hash::make($request->password),
            ]);
            return redirect()->route('login-dokter')->with('success', 'Berhasil menambahkan pengguna');
        }

        return back()->withInput()->with('error', 'Konfirmasi password tidak sama');


    }

    public function create_pengguna(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'nama' => 'required',
            'email' => 'required|email|unique:pengguna',
            'password' => 'required|min:8',
            'konfirmasi_password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->messages());
        }

        if ($request->password == $request->konfirmasi_password) {
            pengguna::create([
                'nama' => $request->nama,
                'role_id' => 3,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            return redirect()->route('login-user')->with('success', 'Berhasil menambahkan pengguna');
        }
        return back()->withInput()->with('error', 'Konfirmasi password tidak sama');
    }

    public function update_pengguna(){
        $validator = Validator::make(request()->all(), [
            'id' => 'required',
            'username' => 'required',
            'email' => 'required',
        ]);

        if ($validator->fails()) {
            $response = [
                'message' => $validator->errors()->first()
            ];
            return response()->json($response, 400);
        }

        $data = pengguna::where('id', request('id'))->first();
        $data->nama = request('username');
        $data->email = request('email');
        $data->update();
        $response = [
            'status' => 200,
            'message' => 'Berhasil Update Data Pengguna'
        ];
        return response()->json($response, 200);
    }
    
    public function update_pengguna_dokter(){
        $validator = Validator::make(request()->all(), [
            'id' => 'required',
            'username' => 'required',
            'email' => 'required',
            'nomor_sip' => 'required',
        ]);

        if ($validator->fails()) {
            $response = [
                'message' => $validator->errors()->first()
            ];
            return response()->json($response, 400);
        }

        $data = pengguna::where('id', request('id'))->first();
        $data->nama = request('username');
        $data->email = request('email');
        $data->nomor_sip = request('nomor_sip');
        $data->update();
        $response = [
            'status' => 200,
            'message' => 'Berhasil Update Data Pengguna Dokter'
        ];
        return response()->json($response, 200);
    }

    public function update_password(){
        $validator = Validator::make(request()->all(), [
            'id' => 'required',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {
            $response = [
                'message' => $validator->errors()->first()
            ];
            return response()->json($response, 400);
        }

        $data = pengguna::where('id', request('id'))->first();
        $password =  password_hash(request('password'), PASSWORD_BCRYPT);
        $data->password = $password;
        $data->update();
        $response = [
            'status' => 200,
            'message' => 'Berhasil Mengganti Password'
        ];
        return response()->json($response, 200);
    }


}
