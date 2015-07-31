<?php namespace ProyectoSGSST\Models;

use Illuminate\Database\Eloquent\Model;

class Seguimiento extends Model {

	protected $table = 'seguimiento';
	protected $fillable = ['IdSeguimiento','TipoSeguimiento','FechaSeguimiento','DescripcionSeguimiento','GravedadSeguimiento','FechaControl'];
	protected $guarded = ['IdSeguimiento'];

}
