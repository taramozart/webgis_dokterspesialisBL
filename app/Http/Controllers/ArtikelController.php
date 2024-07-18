<?php

namespace App\Http\Controllers;

use App\Models\artikel;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ArtikelController extends Controller
{
    //Artikel
    public function create_artikel(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'judul' => 'required',
            'gambar' => 'required|mimes:jpg,png,jpeg|max:2048',
            'deskripsi' => 'required',
            'sumber' => 'required',
            'penulis' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->messages());
        }

        $gambar = $request->gambar->store("artikel/");
        
        artikel::create([
            'judul' => $request->judul,
            'sumber' => $request->sumber,
            'deskripsi' => $request->deskripsi,
            'penulis' => $request->penulis, 
            'gambar' => $gambar
        ]);


        return redirect()->route('artikel-kesehatan');
    }

    public function get_all_artikel(Request $request)
    {
        $data = artikel::where(function (Builder $query) use ($request) {
            if (isset($request->search)) {
                $query->where('judul', 'LIKE', "%{$request->search}%");
            }
        })->paginate(5)->toArray();
        return view('pages/dashboard/admin/artikel/artikel-kesehatan', compact('data'));
        
    }

    public function get_one_artikel(Request $request)
    {
        $data = artikel::where('id', $request->query('id'))->firstOrFail()->toArray();
        return view('pages/dashboard/admin/artikel/lihat-artikel/lihat-artikel', compact('data'));
    }

    public function update_artikel_view(Request $request){
        $data = artikel::where('id', $request->query('id'))->firstOrFail()->toArray();
        return view('pages/dashboard/admin/artikel/edit-artikel/edit-artikel', compact('data'));
    }

    public function update_artikel(Request $request)
    {
        $validator = Validator::make(request()->all(), [
            'judul' => 'required',
            'gambar' => 'mimes:jpg,png,jpeg|max:2048',
            'deskripsi' => 'required',
            'sumber' => 'required',
            'penulis' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator->messages());
        }

        $data = artikel::where('id', $request->query('id'))->firstOrFail();
        if($request->gambar !== null){
            Storage::delete($data->gambar);
            $gambar = $request->gambar->store("artikel/");
        }

        $data->update([
            'judul' => $request->judul,
            'sumber' => $request->sumber,
            'deskripsi' => $request->deskripsi,
            'penulis' => $request->penulis, 
            'gambar' => $request->gambar !== null ? $gambar : $data->gambar
        ]);

        return redirect()->route('artikel-kesehatan');

    }

    public function delete_artikel(Request $request){

        $data = artikel::where('id', $request->query('id'))->firstOrFail();
        if($data->gambar !== null){
            Storage::delete($data->gambar);
        }
        $data->delete();
        return redirect()->route('artikel-kesehatan');
    }
}
