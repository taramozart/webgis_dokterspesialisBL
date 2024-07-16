<?php

namespace App\Http\Controllers;
use App\Models\wilayah;
use Illuminate\Http\Request;

class WilayahController extends Controller
{
    public function get_all_wilayah(){
        $data = wilayah::all();
        $response =  [
            'status' => 200,
            'data' => $data,
            'message' => 'Berhasil menampilkan semua data wilayah'
        ]; 

        return response()->json($response, 200);
    }
}
