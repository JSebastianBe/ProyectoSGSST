<?php namespace ProyectoSGSST\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleCargoPersona extends Model {

	protected $table = 'detallecargopersona';
	protected $fillable = ['IdCargo','IdPersona'];
	protected $guarded = ['IdDetalleCargoPersona'];

}
