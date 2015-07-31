<?php namespace ProyectoSGSST\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleMatrizPeligroRiesgo extends Model {

	protected $table = 'detallematrizpeligroriesgo';
	protected $fillable = ['IdRiesgoDebil','IdMatrizPeligro'];
	protected $guarded = ['IdDetalleMatrizPeligroRiesgo'];

}
