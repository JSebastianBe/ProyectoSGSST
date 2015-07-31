<?php namespace ProyectoSGSST\Models;

use Illuminate\Database\Eloquent\Model;

class MatrizPeligro extends Model {

	protected $table = 'matrizpeligro';
	protected $fillable = ['FechaModificacion','CalificacionMatriz'];
	protected $guarded = ['IdMatrizPeligro'];

}
