@extends('layouts.main')
@section('title', 'dosen')

@section('content')
<div class="popupForm">
    <div class="panel-heading">
        <div class="d-flex justify-content-between" style="display: flex; justify-content: space-between; align-items: center;">
            <h3 class="panel-title">Data Dosen</h3>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
           <a href="{{ route('dosen.create') }}" class="btn btn-warning btn-sm">+ Tambah Data</a>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID Dosen</th>
                    <th>Nama Dosen</th>
                    <th>NIDN</th>
                    <th>Email</th>
                    <th>Program Studi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
               <tbody>
    @foreach($datas as $data )
    <tr>
        <td>{{ $data['id'] }}</td>
        <td>{{ $data['nama'] }}</td>
        <td>{{ $data['nidn'] }}</td>
        <td>{{ $data['email'] }}</td>
        <td>{{ $data['prodi'] }}</td>
    <td>
    <div class="d-flex gap-2">
        <a href="{{ route('dosen.edit', $data['nidn']) }}" class="btn btn-primary btn-sm">Edit</a>

        <form action="{{ route('dosen.destroy', $data['nidn']) }}" method="POST" onsubmit="return confirm('Yakin mau hapus data ini?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
        </form>
    </div>
    </td>
</form>
    </tr>
    @endforeach
    </tbody>
</table>
        
       
    </div>
</div>
@endsection
