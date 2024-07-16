<?php

namespace App\Http\Controllers;

use App\Models\artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ArtikelController extends Controller
{
    //Artikel
    public function create_artikel()
    {
        $validator = Validator::make(request()->all(), [
            'judul' => 'required',
            'gambar' => 'required',
            'deskripsi' => 'required',
            'sumber' => 'required',
            'penulis' => 'required',
        ]);

        if ($validator->fails()) {
            $response = [
                'message' => $validator->errors()->first()
            ];
            return response()->json($response, 400);
        }

        try {

            $data_artikel = new artikel();
            $data_artikel->judul = request('judul');
            $data_artikel->deskripsi = request('deskripsi');
            $data_artikel->sumber = request('sumber');
            $data_artikel->penulis = request('penulis');
            $data_artikel->save();
            $id = $data_artikel->id;
            $data_artikel->gambar = request('gambar')->store("artikel/$id");
            $data_artikel->update();

            $response = [
                'status' => 200,
                'data' => $data_artikel,
                'message' => 'Berhasil menambahkan data artikel'
            ];
            return response()->json($response, 200);

        } catch (\Exception $e) {
            $response = [
                'status' => 400,
                'message' => $e->getMessage()
            ];
            return response()->json($response, 400);
        }
    }

    public function get_all_artikel()
    {
        $data = artikel::all();
        $response = [
            'status' => 200,
            'data' => $data,
            'message' => 'Berhasil menampilkan seluruh artikel'
        ];
        return response()->json($response, 200);
    }

    public function get_one_artikel()
    {
        $validator = Validator::make(request()->all(), [
            'id' => 'required',
        ]);

        if ($validator->fails()) {
            $response = [
                'message' => $validator->errors()->first()
            ];
            return response()->json($response, 400);
        }

        $data = artikel::where('id', request('id'))->get();
        $response = [
            'status' => 200,
            'data' => $data,
            'message' => 'Berhasil menampilkan satu data artikel'
        ];
        return response()->json($response, 200);
    }

    public function update_artikel()
    {
        $validator = Validator::make(request()->all(), [
            'id' => 'required',
        ]);

        if ($validator->fails()) {
            $response = [
                'message' => $validator->errors()->first()
            ];
            return response()->json($response, 400);
        }

        try {

            $data = artikel::where('id', request('id'))->first();
            if (request('judul') != null) {
                $data->judul = request('judul');
            }
            if (request('deskripsi') != null) {
                $data->deskripsi = request('deskripsi');
            }
            if (request('sumber') != null) {
                $data->sumber = request('sumber');
            }
            if (request('penulis') != null) {
                $data->penulis = request('penulis');
            }
            if (request('gambar') != null) {
                Storage::delete($data->gambar);
                $data->gambar = request('gambar')->store("artikel/$data->id");
            }
            $data->update();
            $response = [
                'status' => 200,
                'data' => $data,
                'message' => 'Berhasil Update Data Artikel'
            ];
            return response()->json($response, 200);
        } catch (\Exception $e) {
            $response = [
                'status' => 400,
                'message' => $e->getMessage()
            ];
            return response()->json($response, 400);
        }
    }

    public function delete_artikel(){

        $validator = Validator::make(request()->all(), [
            'id' => 'required',
        ]);

        if ($validator->fails()) {
            $response = [
                'message' => $validator->errors()->first()
            ];
            return response()->json($response, 400);
        }

        $data = artikel::where('id', request('id'))->first();
        Storage::delete($data->gambar);
        $data->delete();
        $response = [
            'status' => 200,
            'data' => $data,
            'message' => 'Berhasil Menghapus Data Artikel'
        ];
        return response()->json($response, 200);
    }
}
