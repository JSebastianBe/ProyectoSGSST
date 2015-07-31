<?php namespace ProyectoSGSST\Models;

use Illuminate\Database\Eloquent\Model;

class Copasst extends Model {

	protected $table = 'copasst';
	protected $fillable = ['FechaInicioCopasst','FechaFinCopasst'];
	protected $guarded = ['IdCopasst'];

}
