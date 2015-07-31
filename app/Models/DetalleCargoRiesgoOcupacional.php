<?php namespace ProyectoSGSST\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleCargoRiesgoOcupacional extends Model {

	protected $table = 'detallecargoriesgoocupacional';
	protected $fillable = ['NivelRiesgo','IdRiesgo','IdCargo'];
	protected $guarded = ['IdDetalleCargoRiesgoOcupacional'];

}
