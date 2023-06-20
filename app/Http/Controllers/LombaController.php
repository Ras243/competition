<?php

namespace App\Http\Controllers;

use App\Models\DaftarLomba;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

class LombaController extends Controller
{ 
    // Menampilkan Daftar Lomba
    public function index()
    {
        // $daftarLomba = DaftarLomba::latest()->paginate(5);
        $daftarLomba = DaftarLomba::all();
        return view('daftarLomba.daftar_lomba', compact('daftarLomba'));    
    }

    // Menambah Daftar Lomba
    public function create()
    {
        return view('daftarLomba.create');
    }

    // Menyimpan Tambahan Daftar Lomba
    public function store(Request $request)
    {
    $request->validate([
        'nama_lomba' => 'required',
        'sampul_lomba' => 'required|mimes:png,jpg,jpeg|max:2048',
        'deskripsi_lomba' => 'required|string|max:255',
        'biaya_pendaftaran' => 'required|numeric',
        'batas_pendaftaran' => 'required|date',
    ]);

    // DaftarLomba::create($request->all());
    
    // upload image
    $image = $request->file('sampul_lomba');
    $image->storeAs('public/lomba', $image->hashName());

    // create post
    DaftarLomba::create([
        'nama_lomba' => $request->nama_lomba,
        'sampul_lomba' => $image->hashName(),
        'deskripsi_lomba' => $request->deskripsi_lomba,
        'biaya_pendaftaran' => $request->biaya_pendaftaran,
        'batas_pendaftaran' => $request->batas_pendaftaran,
    ]);

    return redirect()->route('daftarLomba.daftar_lomba')
        ->with('success', 'Daftar Lomba created successfully.');
    }

    public function update(Request $request, DaftarLomba $daftarLomba)
    {
    $request->validate([
        'nama_lomba' => 'required',
        'sampul_lomba' => 'nullable|mimes:png,jpg,jpeg|max:2048',
        'deskripsi_lomba' => 'required|string|max:255',
        'biaya_pendaftaran' => 'required|numeric',
        'batas_pendaftaran' => 'required|date',
    ]);

    // Mendapatkan data lomba yang ada sebelumnya
    $existingData = $daftarLomba->toArray();

    // Mengupdate hanya atribut yang diperlukan
    $daftarLomba->nama_lomba = $request->nama_lomba;
    $daftarLomba->deskripsi_lomba = $request->deskripsi_lomba;
    $daftarLomba->biaya_pendaftaran = $request->biaya_pendaftaran;
    $daftarLomba->batas_pendaftaran = $request->batas_pendaftaran;

    // Memeriksa apakah ada file gambar yang diunggah
    if ($request->hasFile('sampul_lomba')) {
        // Menghapus file gambar lama
        Storage::delete('public/lomba/' . $daftarLomba->sampul_lomba);

        // Mengunggah file gambar yang baru
        $image = $request->file('sampul_lomba');
        $image->storeAs('public/lomba', $image->hashName());
        $daftarLomba->sampul_lomba = $image->hashName();
    } else {
        // Menggunakan nilai gambar yang ada sebelumnya
        $daftarLomba->sampul_lomba = $existingData['sampul_lomba'];
    }

    $daftarLomba->save();

    return redirect()->route('daftarLomba.daftar_lomba')
        ->with('success', 'Daftar Lomba updated successfully.');
}

    // Delete
    public function destroy(DaftarLomba $daftarLomba)
    {
        $daftarLomba->delete();

        return redirect()->route('daftarLomba.daftar_lomba')
            ->with('success', 'Daftar Lomba deleted successfully.');
    }

    // atau bisa seperti ini:
    // public function destroy($id): RedirectResponse
    // {
    //     $daftarLomba = DaftarLomba::findOrFail($id);

    //     //delete image
    //     Storage::delete('public/lomba/'. $daftarLomba->image);
    //     // delete post
    //     $daftarLomba->delete();

    //     return redirect()->route('daftarLomba.index')
    //         ->with('success', 'Daftar Lomba deleted successfully.');
    // }

    public function show(DaftarLomba $daftarLomba)
    {
        return view('daftar_lomba.show', compact('daftarLomba'));
    }

    public function edit(DaftarLomba $daftarLomba)
    {
        return view('daftarLomba.edit', compact('daftarLomba'));  
    }
}
