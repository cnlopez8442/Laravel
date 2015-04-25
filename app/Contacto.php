<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model {

	public function Citas()
	{
		return $this->hasMany('App\Cita');
	}
}
