<?php namespace ProyectoSGSST\Models;

use Illuminate\Database\Eloquent\Model;

class RiesgoOcupacional extends Model {

	protected $table = 'riesgoopcupacional';
	protected $fillable = ['NombreRiesgo'];
	protected $guarded = ['IdRiesgoOcupacional'];

}
