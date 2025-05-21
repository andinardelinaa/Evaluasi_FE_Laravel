<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<div class="container mt-5">
    <h2 class="mb-4">Form Edit Dosen</h2>

    <div class="card-body">
        <form action="{{ route('dosen.update', $data['nidn']) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="id_dosen">ID Dosen</label>
                <input type="text"
                       class="form-control"
                       id="id_dosen"
                       name="id_dosen"
                       value="{{ $data['id'] }}"
                       readonly>
            </div>

            <div class="form-group mb-3">
                <label for="nama">Nama Dosen</label>
                <input type="text"
                       class="form-control"
                       id="nama"
                       name="nama"
                       value="{{ $data['nama'] }}"
                       required>
            </div>

            <div class="form-group mb-3">
                <label for="nidn">NIDN</label>
                <input type="text"
                       class="form-control"
                       id="nidn"
                       name="nidn"
                       value="{{ $data['nidn'] }}"
                       required>
            </div>

            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email"
                       class="form-control"
                       id="email"
                       name="email"
                       value="{{ $data['email'] }}"
                       required>
            </div>

            <div class="form-group mb-4">
                <label for="prodi">Program Studi</label>
                <input type="text"
                       class="form-control"
                       id="prodi"
                       name="prodi"
                       value="{{ $data['prodi'] }}"
                       required>
            </div>

            
    @csrf
    @method('PUT')
    
    <!-- input lainnya di sini -->

    <button type="submit" class="btn btn-success btn-block">Simpan Perubahan</button>
</form>

        </form>
    </div>
</div>
