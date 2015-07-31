<?php namespace ProyectoSGSST\Models;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model {

	protected $table = 'cargo';
	protected $fillable = ['NombreCargo','DescripcionCargo'];
	protected $guarded = ['IdCargo'];

}
