<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tempat extends Model
{
    public function pesanan_detail()
    {
        return $this->hasMany('App\PesananDetail', 'tempat_id', 'id');
    }
}
