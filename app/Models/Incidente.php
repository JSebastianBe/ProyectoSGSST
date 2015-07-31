<?php namespace ProyectoSGSST\Models;

use Illuminate\Database\Eloquent\Model;

class Incidente extends Model {

	protected $table = 'incidente';
	protected $fillable = ['TipoIncidente','FechaIncidente','CausasIncidente','DescripcionIncidente','GravedadIncidente'];
	protected $guarded = ['IdIncidente'];

}
