<?php namespace ProyectoSGSST\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleIncidentePersona extends Model {

	protected $table = 'detalleincidentepersona';
	protected $fillable = ['RolPersona','IdPersona','IdIncidente'];
	protected $guarded = ['IdDetalleIncidentePersona'];

}
