<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
      protected $table = 'mahasiswas'; // nama tabel
    protected $primaryKey = 'id'; // atau 'id_dosen' kalau kamu pakai itu
    public $incrementing = true; // false jika pakai string ID (seperti 'id_dosen')
    protected $keyType = 'int'; // ubah ke 'string' kalau pakai id_dosen

    protected $fillable = [
        'nama',
        'nim',
        'email',
        'prodi',
    ];
}
