<?php

namespace App\Http\Controllers;

use App\Models\data_dokter;
use App\Models\pengguna;
use App\Models\rating;
use App\Models\rating_pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RatingController extends Controller
{
    public function create_rating()
    {
        $validator = Validator::make(request()->all(), [
            'pengguna_id' => 'required',
            'data_dokter_id' => 'required',
            'nilai' => 'required,max:5,min:1',
            'keterangan' => 'required',
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

        try {

            //Create Rating
            $rating = new rating();
            $rating->nilai = request('nilai');
            $rating->keterangan = request('keterangan');
            $rating->save();

            //Create Relasi Rating Pengguna
            $data = new rating_pengguna();
            $data->pengguna_ids()->associate($pengguna);
            $data->data_dokter_ids()->associate($data_dokter);
            $data->rating_ids()->associate($rating);
            $data->save();


            $response = [
                'status' => 200,
                'data' => $data,
                'message' => 'Berhasil menambahkan rating'
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

    public function get_all_rating_by_data_dokter_id(){

        $validator = Validator::make(request()->all(), [
            'data_dokter_id' => 'required',
        ]);

        if ($validator->fails()) {
            $response = [
                'message' => $validator->errors()->first()
            ];
            return response()->json($response, 400);
        }

        $data = rating_pengguna::with('rating', 'pengguna', 'data_dokter')->where('data_dokter_ids', request('data_dokter_id'))->get();

        $response = [
            'status' => 200,
            'data' => $data,
            'message' => 'Berhasil menampilkan seluruh rating berdasarkan data dokter'
        ];
        return response()->json($response, 200);
    }

    public function get_averange_rating_by_data_dokter_id(){
        $validator = Validator::make(request()->all(), [
            'data_dokter_id' => 'required',
        ]);

        if ($validator->fails()) {
            $response = [
                'message' => $validator->errors()->first()
            ];
            return response()->json($response, 400);
        }

        $data = rating_pengguna::with('rating', 'pengguna', 'data_dokter')->where('data_dokter_ids', request('data_dokter_id'))->avg('rating.nilai');

        // $sum = $data->avg('rating.nilai');

        $response = [
            'status' => 200,
            'data' => $data,
            'message' => 'Berhasil menampilkan averange rating berdasarkan data dokter'
        ];
        return response()->json($response, 200);


    }

}
