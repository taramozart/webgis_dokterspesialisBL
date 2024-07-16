<?php

namespace App\Http\Controllers;

use App\Models\jenis_pengajuan;
use App\Models\pengajuan_dokter;
use App\Models\pengajuan_dokter_sebelumnya;
use App\Models\pengguna;
use App\Models\spesialisasi;
use App\Models\status_pengajuan;
use App\Models\wilayah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PengajuanDokterController extends Controller
{
    public function create_pengajuan_penambahan_dokter()
    {
        $validator = Validator::make(request()->all(), [
            'pengguna_id' => 'required',
            'jenis_pengajuan_id' => 'required',
            'status_pengajuan_id' => 'required',
            'nama' => 'required',
            'bidang_spesialisasi' => 'required',
            'nomor_sip' => 'required',
            'jadwal' => 'required',
            'kecamatan' => 'required',
            'alamat' => 'required',
            'gambar' => 'required',
        ]);

        if ($validator->fails()) {
            $response = [
                'message' => $validator->errors()->first()
            ];
            return response()->json($response, 400);
        }

        try {

            //Entitas
            $pengguna=pengguna::where('id', request('pengguna_id'))->first();
            $jenis_pengajuan = jenis_pengajuan::where('id', request('jenis_pengajuan_id'))->first();
            $status_pengajuan = status_pengajuan::where('id', request('status_pengajuan_id'))->first();
            $bidang_spesialisasi = spesialisasi::where('id', request('bidang_spesialisasi'))->first();
            $kecamatan = wilayah::where('id', request('kecamatan'))->first();

            $data = new pengajuan_dokter();
            $data->pengguna_ids()->associate($pengguna);
            $data->jenis_pengajuan_ids()->associate($jenis_pengajuan);
            $data->status_pengajuan_ids()->associate($status_pengajuan);
            $data->nama = request('nama');
            $data->bidang_spesialisasis()->associate($bidang_spesialisasi);
            $data->nomor_sip = request('nomor_sip');
            $data->nomor_kontak = request('nomor_kontak');
            $data->jadwal = request('jadwal');
            $data->kecamatans()->associate($kecamatan);
            $data->alamat = request('alamat');
            $data->link_map = request('link_map');
            $data->save();
            $id = $data->id;
            $data->gambar = request('gambar')->store("pengajuan/$id");
            $data->save();

            $response = [
                'status' => 200,
                'data' => $data,
                'message' => 'Berhasil menambahkan pengajuan dokter'
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

    public function create_pengajuan_perubahan_dokter()
    {
        $validator = Validator::make(request()->all(), [
            //Pengajuan Sebelumnya
            'nama_sebelumnya' => 'required',
            'bidang_spesialisasi_sebelumnya' => 'required',
            // 'nomor_sip_sebelumnya' => 'required',
            'jadwal_sebelumnya' => 'required',
            'kecamatan_sebelumnya' => 'required',
            'alamat_sebelumnya' => 'required',

            //Pengajuan
            'pengguna_id' => 'required',
            'jenis_pengajuan_id' => 'required',
            'status_pengajuan_id' => 'required',
            'nama' => 'required',
            'bidang_spesialisasi' => 'required',
            'nomor_sip' => 'required',
            'jadwal' => 'required',
            'kecamatan' => 'required',
            'alamat' => 'required',
            'gambar' => 'required',
        ]);

        if ($validator->fails()) {
            $response = [
                'message' => $validator->errors()->first()
            ];
            return response()->json($response, 400);
        }

        try {
            //Entitas
            $pengguna=pengguna::where('id', request('pengguna_id'))->first();
            $jenis_pengajuan = jenis_pengajuan::where('id', request('jenis_pengajuan_id'))->first();
            $status_pengajuan = status_pengajuan::where('id', request('status_pengajuan_id'))->first();
            $bidang_spesialisasi = spesialisasi::where('id', request('bidang_spesialisasi'))->first();
            $bidang_spesialisasi_sebelumnya = spesialisasi::where('id', request('bidang_spesialisasi_sebelumnya'))->first();
            $kecamatan = wilayah::where('id', request('kecamatan'))->first();
            $kecamatan_sebelumnya = wilayah::where('id', request('kecamatan_sebelumnya'))->first();

            //Data Sebelumnya
            $data_sebelumnya = new pengajuan_dokter_sebelumnya();
            $data_sebelumnya->nama = request('nama_sebelumnya');
            $data_sebelumnya->bidang_spesialisasis()->associate($bidang_spesialisasi_sebelumnya);
            // $data_sebelumnya->nomor_sip = request('nomor_sip_sebelumnya');
            $data_sebelumnya->nomor_kontak = request('nomor_kontak_sebelumnya');
            $data_sebelumnya->jadwal = request('jadwal_sebelumnya');
            $data_sebelumnya->kecamatans()->associate($kecamatan_sebelumnya);
            $data_sebelumnya->alamat = request('alamat_sebelumnya');
            $data_sebelumnya->save();

            //Data Baru
            $data = new pengajuan_dokter();
            $data->pengajuan_dokter_sebelumnya_ids()->associate($data_sebelumnya);
            $data->pengguna_ids()->associate($pengguna);
            $data->jenis_pengajuan_ids()->associate($jenis_pengajuan);
            $data->status_pengajuan_id()->associate($status_pengajuan);
            $data->nama = request('nama');
            $data->bidang_spesialisasis()->associate($bidang_spesialisasi);
            $data->nomor_kontak = request('nomor_kontak');
            $data->nomor_sip = request('nomor_sip');
            $data->jadwal = request('jadwal');
            $data->kecamatans()->associate($kecamatan);
            $data->alamat = request('alamat');
            $data->link_map = request('link_map');
            $data->save();
            $id = $data->id;
            $data->gambar = request('gambar')->store("pengajuan/$id");
            $data->save();

            $response = [
                'status' => 200,
                'data' => $data,
                'message' => 'Berhasil menambahkan pengajuan perubahan dokter'
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

    public function create_pengajuan_penghapusan_dokter()
    {
        $validator = Validator::make(request()->all(), [
            'pengguna_id' => 'required',
            'jenis_pengajuan_id' => 'required',
            'status_pengajuan_id' => 'required',
            'nama' => 'required',
            'bidang_spesialisasi' => 'required',
            'kecamatan' => 'required',
            'alamat' => 'required',
        ]);

        if ($validator->fails()) {
            $response = [
                'message' => $validator->errors()->first()
            ];
            return response()->json($response, 400);
        }

        try {

            //Entitas
            $pengguna=pengguna::where('id', request('pengguna_id'))->first();
            $jenis_pengajuan = jenis_pengajuan::where('id', request('jenis_pengajuan_id'))->first();
            $status_pengajuan = status_pengajuan::where('id', request('status_pengajuan_id'))->first();
            $bidang_spesialisasi = spesialisasi::where('id', request('bidang_spesialisasi'))->first();
            $kecamatan = wilayah::where('id', request('kecamatan'))->first();

            $data = new pengajuan_dokter();
            $data->pengguna_ids()->associate($pengguna);
            $data->jenis_pengajuan_ids()->associate($jenis_pengajuan);
            $data->status_pengajuan_ids()->associate($status_pengajuan);
            $data->nama = request('nama');
            $data->nomor_kontak = request('nomor_kontak');
            $data->bidang_spesialisasis()->associate($bidang_spesialisasi);
            $data->kecamatans()->associate($kecamatan);
            $data->alamat = request('alamat');
            $data->save();

            $response = [
                'status' => 200,
                'data' => $data,
                'message' => 'Berhasil menambahkan pengajuan penghapusan dokter'
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

    public function get_all_pengajuan_dokter_by_status()
    {
        $validator = Validator::make(request()->all(), [
            'status_pengajuan_id' => 'required',
        ]);

        if ($validator->fails()) {
            $response = [
                'message' => $validator->errors()->first()
            ];
            return response()->json($response, 400);
        }

        $data = pengajuan_dokter::with('status_pengajuan_ids', 'bidang_spesialisasis')->where('status_pengajuan_id', request('status_pengajuan_id'))->get();

        $response = [
            'status' => 200,
            'data' => $data,
            'message' => 'Berhasil menampilkan seluruh pengajuan dokter'
        ];
        return response()->json($response, 200);
    }

    public function get_all_pengajuan_dokter_by_pengguna()
    {
        $validator = Validator::make(request()->all(), [
            'pengguna_id' => 'required',
        ]);

        if ($validator->fails()) {
            $response = [
                'message' => $validator->errors()->first()
            ];
            return response()->json($response, 400);
        }

        $data = pengajuan_dokter::with('status_pengajuan_ids', 'bidang_spesialisasis')->where('pengguna_id', request('pengguna_id'))->get();

        $response = [
            'status' => 200,
            'data' => $data,
            'message' => 'Berhasil menampilkan seluruh pengajuan dokter'
        ];
        return response()->json($response, 200);
    }

    public function get_one_pengajuan_dokter()
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

        $data = pengajuan_dokter::with('pengajuan_dokter_sebelumnya_ids', 'jenis_pengajuan_ids', 'status_pengajuan_ids', 'bidang_spesialisasis', 'kecamatans')->where('id', request('id'))->get();
        $response = [
            'status' => 200,
            'data' => $data,
            'message' => 'Berhasil menampilkan satu data pengajuan dokter'
        ];
        return response()->json($response, 200);
    }

    public function update_status_pengajuan_dokter()
    {
        $validator = Validator::make(request()->all(), [
            'id' => 'required',
            'status_pengajuan_id' => 'required',
        ]);

        if ($validator->fails()) {
            $response = [
                'message' => $validator->errors()->first()
            ];
            return response()->json($response, 400);
        }

        $data = pengajuan_dokter::where('id', request('id'))->first();
        $status_pengajuan = status_pengajuan::where('id', request('status_pengajuan_id'))->first();
        $data->status_pengajuan_ids()->associate($status_pengajuan);
        $data->update();
        $response = [
            'status' => 200,
            'data' => $data,
            'message' => 'Berhasil Update Status Pengajuan Dokter'
        ];
        return response()->json($response, 200);
    }

    public function download_gambar_pengajuan_dokter()
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

        $data = pengajuan_dokter::where('id', request('id'))->first();
        $nama = $data->nama;
        return Storage::download($data->gambar, "gambar-pengajuan-$nama");
    }
}
