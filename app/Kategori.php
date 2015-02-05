<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model {

	protected $table = 'kategori';

	public function barang()
	{
		return $this->hasMany('App\Barang', 'kategori_id');
	}

}
