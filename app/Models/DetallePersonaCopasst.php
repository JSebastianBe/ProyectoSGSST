<?php namespace ProyectoSGSST\Models;

use Illuminate\Database\Eloquent\Model;

class DetallePersonaCopasst extends Model {

	protected $table = 'detallepersonacopasst';
	protected $fillable = ['NivelCopasst','FechaIngresoCopasst','IdCopasst','IdPersona'];
	protected $guarded = ['IdDetallePersonaCopasst'];

}
