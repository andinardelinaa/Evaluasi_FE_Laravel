@extends('layouts.main')
@section('title', 'dosen')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="d-flex justify-content-between" style="display: flex; justify-content: space-between; align-items: center;">
            <h3 class="panel-title">Data Mahasiswa</h3>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <a href="{{ route('mahasiswa.create') }}" class="btn btn-warning btn-sm">+ Tambah Data</a>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID Mahasiswa</th>
                    <th>Nama Mahasiswa</th>
                    <th>NIM</th>
                    <th>Email</th>
                    <th>Program Studi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
               <tbody>
    @foreach($datas as $data)
    <tr>
        <td>{{ $data['id'] }}</td>
        <td>{{ $data['nama'] }}</td>
        <td>{{ $data['nim'] }}</td>
        <td>{{ $data['email'] }}</td>
        <td>{{ $data['prodi'] }}</td>
        <td> <div class="d-flex gap-2">
        <a href="{{ route('mahasiswa.edit', $data['nim']) }}" class="btn btn-primary btn-sm">Edit</a>

        <form action="{{ route('mahasiswa.destroy', $data['nim']) }}" method="POST" onsubmit="return confirm('Yakin mau hapus data ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
        </form>
    </div>
    </tr>

    @endforeach
</tbody>

            </tbody>
        </table>
        
       
    </div>
</div>
@endsection
