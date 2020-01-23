<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    protected $table = 'pendidikans';

    public function kependudukan() {
        return $this->belongsTo('App\Kependudukan');
    }
}
