<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div class="container mt-5">
    
            <h2 class="mb-0">Form Edit Mahasiswa</h2>
        
        <div class="card-body">
            <form action="{{ route('mahasiswa.update', $data['nim']) }}" method="POST">
                @csrf
                <div class="form-group mb-3">
                    <label for="nama">Nama Mahasiswa</label>
                    <input type="text" class="form-control" value="{{ $data['nama'] }}" id="nama" name="nama" required>
                </div>
                <div class="form-group mb-3">
                    <label for="nidn">NIM</label>
                    <input type="text" class="form-control" value="{{ $data['nim'] }}" id="nim" name="nim" required>
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" value="{{ $data['email'] }}" id="email" name="email" required>
                </div>
                <div class="form-group mb-4">
                    <label for="prodi">Program Studi</label>
                    <input type="text" class="form-control" value="{{ $data['prodi'] }}" id="prodi" name="prodi" required>
                </div> 
                @csrf
    @method('PUT')
    
    <!-- input lainnya di sini -->

    <button type="submit" class="btn btn-success btn-block">Simpan Perubahan</button>
</form>
        </div>
   
</div>

