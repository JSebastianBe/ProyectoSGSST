<?php namespace ProyectoSGSST\Models;

use Illuminate\Database\Eloquent\Model;

class Verificacion extends Model {

	protected $table = 'verificacion';
	protected $fillable = ['FechaVerificacion','AccionImplementada','ControlEfectivo','IdRiesgoDebil'];
	protected $guarded = ['IdVerificacion'];

}
