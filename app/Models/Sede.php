<?php namespace ProyectoSGSST\Models;

use Illuminate\Database\Eloquent\Model;

class Sede extends Model {

	protected $table = 'sede';
	protected $fillable = ['NombreSede','DireccionSede','TelefonoSede'];
	protected $guarded = ['IdSede'];

}
