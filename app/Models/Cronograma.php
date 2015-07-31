<?php namespace ProyectoSGSST\Models;

use Illuminate\Database\Eloquent\Model;

class Cronograma extends Model {

	protected $table = 'cronograma';
	protected $fillable = ['IdCronograma','FechaProgramacion','FechaEvento','IdSede','IdPersona'];
	protected $guarded = ['IdCronograma'];

}
