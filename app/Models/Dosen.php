<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
     protected $table = 'dosens'; // nama tabel
    protected $primaryKey = 'id'; // atau 'id_dosen' kalau kamu pakai itu
    public $incrementing = true; // false jika pakai string ID (seperti 'id_dosen')
    protected $keyType = 'int'; // ubah ke 'string' kalau pakai id_dosen

    protected $fillable = [
        'nama',
        'nidn',
        'email',
        'prodi',
    ];
}
