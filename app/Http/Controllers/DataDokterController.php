<?php

namespace App\Http\Controllers;

use App\Models\data_dokter;
use App\Models\spesialisasi;
use App\Models\wilayah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class DataDokterController extends Controller
{

    // Data Dokter
    public function create_data_dokter(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'bidang_spesialisasi' => 'required|exists:spesialisasi,id',
            'nomor_sip' => 'required',
            'jadwal' => 'required',
            'kecamatan' => 'required|exists:wilayah,id',
            'alamat' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'gambar' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->messages());
        }


        $data = data_dokter::create([
            'nama' => $request->nama,
            'bidang_spesialisasi' => $request->bidang_spesialisasi,
            'nomor_kontak' => $request->nomor_kontak,
            'nomor_sip' => $request->nomor_sip,
            'jadwal' => $request->jadwal,
            'kecamatan' => $request->kecamatan,
            'alamat' => $request->alamat,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        ]);

        $id = $data->id;
        $gambar = $request->gambar->store("data_dokter/{$id}");
        $data->update(['gambar' => $gambar]);

        return back()->with('success', 'Data Dokter Berhasil ditambahkan');
    }


    public function get_all_data_dokter()
    {
        if (request('search') != null && request('search_kecamatan') == null && request('search_spesialisasi') == null) {
            $data = data_dokter::with('bidang_spesialisasis', 'kecamatans')->where('nama', 'like', '%' . request('search') . '%')->get()->toArray();
        } else if (request('search') != null || request('search_kecamatan') != null || request('search_spesialisasi') != null) {
            $data = data_dokter::with('bidang_spesialisasis', 'kecamatans')->where('nama', 'like', '%' . request('search') . '%')->orWhere('bidang_spesialisasis', 'like', '%' . request('search_spesialisasi') . '%')->orWhere('kecamatans', 'like', '%' . request('search_kecamatan') . '%')->get()->toArray();
        } else {
            $data = data_dokter::with('bidang_spesialisasis', 'kecamatans')->get()->toArray();
        }
        return view('pages/dashboard/admin/kelola-data/kelola-data-dokter', compact('data'));
    }

    public function get_one_data_dokter(Request $request)
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

        $data = data_dokter::with('bidang_spesialisasis', 'kecamatans')->where('id', request('id'))->get();
        $response = [
            'status' => 200,
            'data' => $data,
            'message' => 'Berhasil menampilkan satu data dokter'
        ];
        return response()->json($response, 200);
    }

    public function update_data_dokter()
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
            $data_dokter = data_dokter::where('id', request('id'))->first();
            if (request('nama') != null) {
                $data_dokter->nama = request('nama');
            }
            if (request('bidang_spesialisasi') != null) {
                $bidang_spesialisasi = spesialisasi::where('id', request('bidang_spesialisasi'))->first();
                $data_dokter->bidang_spesialisasis()->associate($bidang_spesialisasi);
            }
            if (request('nomor_sip') != null) {
                $data_dokter->nomor_sip = request('nomor_sip');
            }
            if (request('jadwal') != null) {
                $data_dokter->jadwal = request('jadwal');
            }
            if (request('kecamatan') != null) {
                $kecamatan = wilayah::where('id', request('kecamatan'))->first();
                $data_dokter->kecamatans()->associate($kecamatan);
            }
            if (request('alamat') != null) {
                $data_dokter->alamat = request('alamat');
            }
            if (request('latitude') != null) {
                $data_dokter->latitude = request('latitude');
            }
            if (request('longtitude') != null) {
                $data_dokter->longtitude = request('longtitude');
            }
            $id = $data_dokter->id;
            Storage::deleteDirectory("data_dokter/$id");
            if (request('gambar') != null) {
                $data_dokter->gambar = request('gambar')->store("data_dokter/$id");
            }

            $data_dokter->update();

            $response = [
                'status' => 200,
                'message' => 'Berhasil Update Data Dokter',
                'data' => $data_dokter
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

    public function delete_data_dokter()
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

        $data_dokter = data_dokter::where('id', request('id'))->first();
        $id = $data_dokter->id;
        Storage::deleteDirectory("data_dokter/$id");
        $data_dokter->delete();
        $response = [
            'status' => 200,
            'message' => 'Berhasil Menghapus Data Dokter',
            'data' => $data_dokter
        ];
        return response()->json($response, 200);
    }

}
