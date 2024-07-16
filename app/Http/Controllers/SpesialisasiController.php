<?php

namespace App\Http\Controllers;
use App\Models\spesialisasi;

class SpesialisasiController extends Controller
{
    public function get_all_spesialisasi(){
        $data = spesialisasi::all();
        $response =  [
            'status' => 200,
            'data' => $data,
            'message' => 'Berhasil menampilkan semua data spesialisasi'
        ]; 

        return response()->json($response, 200);
    }
}
