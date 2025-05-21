<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa; 
use Illuminate\Support\Facades\Http;


class MahasiswaController extends Controller
{
    public function index()
{
    $response = Http::get('http://localhost:8080/mahasiswa');

    // Cek status dan ambil datanya
    if ($response->successful()) {
        $datas = $response->json(); // ubah JSON ke array
    } else {
        $datas = []; // atau kasih pesan error
    }

    return view('mahasiswa', ['datas' => $datas]);
}


    public function create()
    {
        return view('tambah_mahasiswa');
    }


    public function store(Request $request)
{
    // Validasi input
     $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required',
            'email' => 'required',
            'prodi' => 'required',
        ]);
        $response = Http::post('http://localhost:8080/mahasiswa', [
            'nama' => $request->nama,
            'nim' => $request->nim,
            'email' => $request->email,
            'prodi' => $request->prodi,
        ]);
        if ($response->successful()) {
            return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil DItambahkan!');
        }
        return back()->with('error', 'Gagal Menambahkan Data');
    
    // Nanti di sini bisa simpan ke database
}

public function show($id)
{
    // 
}

   public function edit($nim)
{
    $response = Http::get("http://localhost:8080/mahasiswa/$nim");

    if ($response->successful()) {
        $data = $response->json();
        return view('edit_mahasiswa', compact('data'));
    }

    return redirect()->route('mahasiswa.index')->with('error', 'Data tidak ditemukan');
}

public function update(Request $request, $nim)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'nim' => 'required',
        'email' => 'required',
        'prodi' => 'required',
    ]);

    $response = Http::put("http://localhost:8080/mahasiswa/$nim", [
        'nama' => $request->nama,
        'nim' => $request->nim,
        'email' => $request->email,
        'prodi' => $request->prodi,
    ]);

    if ($response->successful()) {
        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil di-update!');
    }

    return back()->with('error', 'Gagal Mengupdate Data');
}


   public function destroy($id)
{
    $response = Http::delete("http://localhost:8080/mahasiswa/$id");

    if ($response->successful()) {
        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil DIhapus!');
    }

    return back()->with('error', 'Gagal Menghapus Data');
}



}
