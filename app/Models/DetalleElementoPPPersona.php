<?php namespace ProyectoSGSST\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleElementoPPPersona extends Model {

	protected $table = 'detalleelementopppersona';
	protected $fillable = ['FechaDotacion','DescripcionDotacion','IdPersona','IdElementoPP'];
	protected $guarded = ['IdDetalleElementoPPPersona'];

}
