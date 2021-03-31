<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{
    public function tempat()
	{
	      return $this->belongsTo('App\Tempat','tempat_id', 'id');
	}

	public function pesanan()
	{
	      return $this->belongsTo('App\Pesanan','pesanan_id', 'id');
	}
}
