<?php namespace ProyectoSGSST\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleEventoPersona extends Model {

	protected $table = 'detalleeventopersona';
	protected $fillable = ['RolPersona','IdPersona','IdEvento'];
	protected $guarded = ['IdDetalleEventoPersona'];

}
