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
    public function create_pengajuan_view()
    {
        $spesialisasi = spesialisasi::all();
        $wilayah = wilayah::all();
        return view('pages/landing-page/pengajuan-dokter/pengajuan-tambah-lokasi', compact(['spesialisasi', 'wilayah']));
    }

    public function create_pengajuan_penambahan_dokter(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'nama' => 'required',
            'bidang_spesialisasi' => 'required|exists:spesialisasi,id',
            'nomor_sip' => 'required',
            'jadwal' => 'required',
            'kecamatan' => 'required|exists:wilayah,id',
            'link_map' => 'required',
            'alamat' => 'required',
            'gambar' => 'required|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->messages());
        }


        pengajuan_dokter::create([
            'pengguna_id' => auth()->user()->id,
            'jenis_pengajuan_id' => 1,
            'status_pengajuan_id' => 1,
            'nama' => $request->nama,
            'kecamatan' => $request->kecamatan,
            'bidang_spesialisasi' => $request->bidang_spesialisasi,
            'nomor_sip' => $request->nomor_sip,
            'nomor_kontak' => $request->nomor_kontak,
            'alamat' => $request->alamat,
            'jadwal' => $request->jadwal,
            'link_map' => $request->link_map,
            'gambar' => $request->gambar->store("pengajuan_dokter"),
        ]);

        return redirect()->route('dashboard-pengajuan-dokter');
    }

    public function create_pengajuan_perubahan_dokter_view()
    {
        $kecamatan = wilayah::all();
        $spesialisasi = spesialisasi::all();
        return view('pages/landing-page/pengajuan-dokter/pengajuan-ubah-lokasi', compact(['kecamatan', 'spesialisasi']));
    }

    public function create_pengajuan_perubahan_dokter(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            //Pengajuan Sebelumnya
            'nama_sebelumnya' => 'required',
            'kecamatan_sebelumnya' => 'required',
            'bidang_spesialisasi_sebelumnya' => 'required',
            'nomor_kontak_sebelumnya' => 'required',
            'alamat_sebelumnya' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->messages());
        }

        $sebelum = pengajuan_dokter_sebelumnya::create([
            'nama' => $request->nama_sebelumnya,
            'bidang_spesialisasi' => $request->bidang_spesialisasi_sebelumnya,
            'kecamatan' => $request->kecamatan_sebelumnya,
            'nomor_kontak' => $request->nomor_kontak_sebelumnya,
            'alamat' => $request->alamat_sebelumnya,
        ]);


        pengajuan_dokter::create([
            'pengguna_id' => auth()->user()->id,
            'pengajuan_dokter_sebelumnya_id' => $sebelum->id,
            'jenis_pengajuan_id' => 2,
            'status_pengajuan_id' => 1,
            'nama' => $request->nama,
            'kecamatan' => $request->kecamatan,
            'bidang_spesialisasi' => $request->bidang_spesialisasi,
            'nomor_sip' => $request->nomor_sip,
            'nomor_kontak' => $request->nomor_kontak,
            'alamat' => $request->alamat,
            'jadwal' => $request->jadwal,
            'link_map' => $request->link_map,
        ]);

        if ($request->gambar !== null) {
            $gambar = $request->gambar->store("pengajuan_dokter");
            $sebelum->update([
                'gambar' => $gambar
            ]);
        }


        return redirect()->route('dashboard-pengajuan-dokter');

    }

    public function create_pengajuan_hapus_lokasi_view()
    {
        $spesialisasi = spesialisasi::all();
        $kecamatan = wilayah::all();
        return view('pages/landing-page/pengajuan-dokter/pengajuan-hapus-lokasi', compact(['kecamatan', 'spesialisasi']));
    }

    public function create_pengajuan_hapus_lokasi(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'nama' => 'required',
            'bidang_spesialisasi' => 'required|exists:spesialisasi,id',
            'kecamatan' => 'required|exists:wilayah,id',
            'alamat' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->messages());
        }

        pengajuan_dokter::create([
            'pengguna_id' => auth()->user()->id,
            'jenis_pengajuan_id' => 3,
            'status_pengajuan_id' => 1,
            'nama' => $request->nama,
            'kecamatan' => $request->kecamatan,
            'bidang_spesialisasi' => $request->bidang_spesialisasi,
            'nomor_kontak' => $request->nomor_kontak,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('dashboard-pengajuan-dokter');

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
        
        $data = pengajuan_dokter::with('status_pengajuan_id', 'bidang_spesialisasis')->where('pengguna_id', auth()->user()->id)->paginate(10)->toArray();

        return view('pages/landing-page/pengajuan-dokter/cek-status-pengajuan', compact('data'));

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
