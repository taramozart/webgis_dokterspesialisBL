<?php

namespace App\Http\Controllers;

use App\Models\data_dokter;
use App\Models\history;
use App\Models\pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HistoryController extends Controller
{
    public function crate_history()
    {
        $validator = Validator::make(request()->all(), [
            'pengguna_id' => 'required',
            'data_dokter_id' => 'required',
        ]);

        if ($validator->fails()) {
            $response = [
                'message' => $validator->errors()->first()
            ];
            return response()->json($response, 400);
        }

        //Entitas
        $pengguna = pengguna::where('id', request('pengguna_id'))->first();
        $data_dokter = data_dokter::where('id', request('data_dokter_id'))->first();

        try{
            $data = new history();
            $data->pengguna_ids()->associate($pengguna);
            $data->data_dokter_ids()->associate($data_dokter);
            $history_sebelumnya = history::where('pengguna_id', request('pengguna_id'))->where('data_dokter_id', request('data_dokter_id'))->first();
            if($history_sebelumnya){
                $history_sebelumnya->delete();
            }
            $data->save();
            $response = [
                'status' => 200,
                'data' => $data,
                'message' => 'Berhasil menambahkan data history'
            ];
            return response()->json($response, 200);

        }catch (\Exception $e) {

            $response = [
                'status' => 400,
                'message' => $e->getMessage()
            ];
            return response()->json($response, 400);
        }
    }

    public function get_all_history_by_pengguna(){
        $data = history::with('data_dokter_ids', 'pengguna_ids')->where('pengguna_id', request('pengguna_id'))->get();
        $response = [
            'status' => 200,
            'data' => $data,
            'message' => 'Berhasil menampilkan seluruh data history'
        ];
        
        return response()->json($response, 200);

    }
}
