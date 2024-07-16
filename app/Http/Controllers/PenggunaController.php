<?php

namespace App\Http\Controllers;

use App\Models\pengguna;
use App\Models\role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PenggunaController extends Controller
{
    public function create_pengguna_dokter()
    {
        $validator = Validator::make(request()->all(), [
            'nama' => 'required',
            'email' => 'required|email',
            'role_id' => 'required',
            'nomor_sip' => 'required',
            'password' => 'required|min:8',
        ]);

        if ($validator->fails()) {

            $response = [
                'message' => $validator->errors()->first()
            ];
            return response()->json($response, 400);
        }

        try{

            $password =  password_hash(request('password'), PASSWORD_BCRYPT);
            $role = role::where('id', request('role_id'))->first();
            $data = new pengguna();
            $data->nama = request('nama');
            $data->email = request('email');
            $data->role_ids()->associate($role);
            $data->nomor_sip = request('nomor_sip');
            $data->password = $password;
            $data->save();
            $response = [
                'status' => 200,
                'data' => $data,
                'message' => 'Berhasil menambahkan pengguna dokter'
            ];
            return response()->json($response, 200);

        }catch (\Exception $e){
            $response = [
                'status' => 400,
                'message' => $e->getMessage()
            ];
            return response()->json($response, 400);
        }

    }

    public function create_pengguna()
    {
        $validator = Validator::make(request()->all(), [
            'nama' => 'required',
            'email' => 'required',
            'role_id' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            $response = [
                'message' => $validator->errors()->first()
            ];
            return response()->json($response, 400);
        }

        try{

            $password =  password_hash(request('password'), PASSWORD_BCRYPT);
            $role = role::where('id', request('role_id'))->first();
            $data = new pengguna();
            $data->nama = request('nama');
            $data->email = request('email');
            $data->role_ids()->associate($role);
            $data->password = $password;
            $data->save();
            $response = [
                'status' => 200,
                'data' => $data,
                'message' => 'Berhasil menambahkan pengguna'
            ];
            return response()->json($response, 200);

        }catch (\Exception $e){
            $response = [
                'status' => 400,
                'message' => $e->getMessage()
            ];
            return response()->json($response, 400);
        }
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
