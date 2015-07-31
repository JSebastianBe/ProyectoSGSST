<?php namespace ProyectoSGSST\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleSedePersona extends Model {

	protected $table = 'detallesedepersona';
	protected $fillable = ['TipoRehubicacion','DescripcionRehubicacion','IdSede','IdPersona'];
	protected $guarded = ['IdDetalleSedePersona'];

}
