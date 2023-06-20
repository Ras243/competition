<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendaftarModel;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class PendaftarController extends Controller
{
    public function index()
    {
        $pendaftar = PendaftarModel::all();
        return view('pendaftarLomba.pendaftar_lomba', compact('pendaftar'));
    }

    public function create()
    {
        return view('pendaftarLomba.create');
    }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'nama_pendaftar' => 'required',
    //         'jenis_kelamin' => 'required',
    //         'instansi' => 'required',
    //         'bukti_pembayaran' => 'required|mimes:png,jpg,jpeg|max:2048',
    //         'status_pendaftar' => 'required',
    //     ]);
    //     $image = $request->file('bukti_pembayaran');
    //     $image->storeAs('public/buktiTransfer', $image->hashName());

    //     // create post
    //     PendaftarModel::create([
    //         'nama_pendaftar' => $request->nama_pendaftar,
    //         'jenis_kelamin' => $request->jenis_kelamin,
    //         'instansi' => $request->instansi,
    //         'bukti_pembayaran' => $image->hashName(),
    //         'status_pendaftar' => $request->status_pendaftar,
    //     ]);

    //     return redirect()->route('pendaftarLomba.pendaftar_lomba')->with('success', 'Pendaftar berhasil ditambahkan');
    // }
    public function store(Request $request)
    {
        $request->validate([
            'instansi' => 'required',
        ]);
        PendaftarModel::create([
            'nama_pendaftar' => Auth::user()->name,
            // 'id_user' => Auth::user()->id,
            'id_user' => 2,
            'instansi' => $request->instansi,
            'status_pendaftar' => 'Belum Lunas',
        ]);
        return redirect('detail_pendaftaran')->with('success', 'Pendaftar berhasil ditambahkan');
    }
    public function edit($id)
    {
        $pendaftar = PendaftarModel::findOrFail($id);
        return view('pendaftarLomba.edit', compact('pendaftar'));
    }
    

    public function update(Request $request, $id)
{
    // $request->validate([
    //     'nama_pendaftar' => 'required',
    //     'jenis_kelamin' => 'required',
    //     'instansi' => 'required',
    //     'bukti_pembayaran' => 'mimes:png,jpg,jpeg|max:2048',
    //     'status_pendaftar' => 'required',
    // ]);

    $pendaftar = PendaftarModel::findOrFail($id);
    // $pendaftar->nama_pendaftar = $request->nama_pendaftar;
    // $pendaftar->jenis_kelamin = $request->jenis_kelamin;
    // $pendaftar->instansi = $request->instansi;
    // $pendaftar->status_pendaftar = $request->status_pendaftar;

    if ($request->hasFile('bukti_pembayaran')) {
        // Menghapus file gambar lama
        // Storage::delete('public/buktiTransfer/' . $pendaftar->bukti_pembayaran);

        // Mengunggah file gambar yang baru
        $image = $request->file('bukti_pembayaran');
        $image->storeAs('public/buktiTransfer', $image->hashName());
        $pendaftar->bukti_pembayaran = $image->hashName();
    }

    $pendaftar->save();

    return back();
    // return redirect()->route('pendaftarLomba.pendaftar_lomba')->with('success', 'Pendaftar berhasil diperbarui');
}


    public function destroy($id)
    {
        $pendaftar = PendaftarModel::findOrFail($id);
        $pendaftar->delete();
        
        return redirect()->route('pendaftarLomba.pendaftar_lomba')->with('success', 'Pendaftar berhasil dihapus');
    }

    public function show($id)
    {
        $pendaftar = PendaftarModel::findOrFail($id);
        return view('pendaftar_show', compact('pendaftar'));
    }
}
