<?php namespace ProyectoSGSST\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleSeguimientoPersona extends Model {

	protected $table = 'detalleseguimientopersona';
	protected $fillable = ['RolPersona','IdSeguimiento','IdPersona'];
	protected $guarded = ['IdDetalleSeguimientoPersona'];

}
