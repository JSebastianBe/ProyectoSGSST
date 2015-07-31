<?php namespace ProyectoSGSST\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleCentroSede extends Model {

	protected $table = 'detallecentrosede';
	protected $fillable = ['IdSede','IdCentro'];
	protected $guarded = ['IdDetalleCentroSede'];

}
