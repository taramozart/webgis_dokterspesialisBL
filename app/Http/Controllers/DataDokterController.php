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
            $data = data_dokter::with('bidang_spesialisasis', 'kecamatans')->where('nama', 'like', '%' . request('search') . '%')->paginate(5)->toArray();
        } else if (request('search') != null || request('search_kecamatan') != null || request('search_spesialisasi') != null) {
            $data = data_dokter::with('bidang_spesialisasis', 'kecamatans')->where('nama', 'like', '%' . request('search') . '%')->orWhere('bidang_spesialisasis', 'like', '%' . request('search_spesialisasi') . '%')->orWhere('kecamatans', 'like', '%' . request('search_kecamatan') . '%')->paginate(5)->toArray();
        } else {
            $data = data_dokter::with('bidang_spesialisasis', 'kecamatans')->paginate(5)->toArray();
        }
        return view('pages/dashboard/admin/kelola-data/kelola-data-dokter', compact('data'));
    }

    public function get_one_data_dokter(Request $request)
    {
        $data = data_dokter::with('bidang_spesialisasis', 'kecamatans')->where('id', request('id'))->first()->toArray();
        return view('pages/dashboard/admin/kelola-data/lihat/lihat-kelola-dokter', compact('data'));
    }

    public function update_data_dokter(Request $request)
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


        $data = data_dokter::where('id', request()->query('id'))->first();
        if ($request->gambar !== null) {
            Storage::delete($data->gambar);
            $gambar = $request->gambar->store("data_dokter/{$data->id}");
        }
        $data->update([
            'nama' => $request->nama,
            'bidang_spesialisasi' => $request->bidang_spesialisasi,
            'nomor_kontak' => $request->nomor_kontak,
            'nomor_sip' => $request->nomor_sip,
            'jadwal' => $request->jadwal,
            'kecamatan' => $request->kecamatan,
            'alamat' => $request->alamat,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'gambar' => $request->gambar !== null ? $gambar : $data->gambar
        ]);

        return redirect()->route('kelola-data-dokter')->with('success', 'Data Dokter Berhasil diupdate');
    }

    public function delete_data_dokter(Request $request)
    {
        $data_dokter = data_dokter::where('id', $request->query('id'))->firstOrFail();
        if ($data_dokter->gambar !== null) {
            Storage::delete($data_dokter->gambar);
        }
        $data_dokter->delete();
        return redirect()->route('kelola-data-dokter')->with('success', 'Data Dokter Berhasil dihapus');
    }

}
