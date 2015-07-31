<?php namespace ProyectoSGSST\Models;

use Illuminate\Database\Eloquent\Model;

class MedicionAmbiental extends Model {

	protected $table = 'medicionambiental';
	protected $fillable = ['MedicionFactor','MedidaControlFactor','IdRiesgoDebil'];
	protected $guarded = ['Id_MedicionAmbiental'];

}
