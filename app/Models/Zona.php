<?php namespace ProyectoSGSST\Models;

use Illuminate\Database\Eloquent\Model;

class Zona extends Model {

	protected $table = 'zona';
	protected $fillable = ['NombreZona','DescripcionZona','IdSede'];
	protected $guarded = ['IdZona'];

}
