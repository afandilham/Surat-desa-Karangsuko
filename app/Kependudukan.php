<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kependudukan extends Model
{
    protected $table = 'kependudukans';

    protected $fillable = [
        'nik', 
        'no_kk', 
        'nama', 
        'kelamin', 
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'golongan_darah',
        'agama',
        'status',
        'shdrt',
        'id_pendidikan',
        'pekerjaan',
        'ibu',
        'ayah'
    ];

    public function pendidikan() {
        return $this->hasOne('App\Pendidikan', 'id', 'id_pendidikan');
    }
}
