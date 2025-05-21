<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen; 
use Illuminate\Support\Facades\Http;


class DosenController extends Controller
{
     public function index()
{
    $response = Http::get('http://localhost:8080/dosen');

    // Cek status dan ambil datanya
    if ($response->successful()) {
        $datas = $response->json(); // ubah JSON ke array
    } else {
        $datas = []; // atau kasih pesan error
    }

    return view('dosen', ['datas' => $datas]);
}


    public function create()
    {
        return view('tambah_dosen');
    }

    public function store(Request $request)
{
    // Validasi input
     $request->validate([
            'nama' => 'required|string|max:255',
            'nidn' => 'required',
            'email' => 'required',
            'prodi' => 'required',
        ]);
        $response = Http::post('http://localhost:8080/dosen', [
            'nama' => $request->nama,
            'nidn' => $request->nidn,
            'email' => $request->email,
            'prodi' => $request->prodi,
        ]);
        if ($response->successful()) {
            return redirect()->route('dosen.index')->with('success', 'Data berhasil DItambahkan!');
        }
        return back()->with('error', 'Gagal Menambahkan Data');
    
    // Nanti di sini bisa simpan ke database
}
public function show($id)
{
    // 
}

  public function edit($nidn)
{
    $response = Http::get("http://localhost:8080/dosen/$nidn");

    if ($response->successful()) {
        $data = $response->json();
        return view('edit_dosen', compact('data'));
    }

    return redirect()->route('dosen.index')->with('error', 'Data tidak ditemukan');
}

public function update(Request $request, $nidn)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'nidn' => 'required',
        'email' => 'required',
        'prodi' => 'required',
    ]);

    $response = Http::put("http://localhost:8080/dosen/$nidn", [
        'nama' => $request->nama,
        'nidn' => $request->nidn,
        'email' => $request->email,
        'prodi' => $request->prodi,
    ]);

    if ($response->successful()) {
        return redirect()->route('dosen.index')->with('success', 'Data berhasil di-update!');
    }

    return back()->with('error', 'Gagal Mengupdate Data');
}


   public function destroy($id)
{
    $response = Http::delete("http://localhost:8080/dosen/$id");

    if ($response->successful()) {
        return redirect()->route('dosen.index')->with('success', 'Data berhasil DIhapus!');
    }

    return back()->with('error', 'Gagal Menghapus Data');
}


}
