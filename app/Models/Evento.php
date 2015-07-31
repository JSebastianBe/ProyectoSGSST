<?php namespace ProyectoSGSST\Models;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model {

	protected $table = 'evento';
	protected $fillable = ['TipoEvento','NombreEvento','FechaEvento','TemaEvento','ObjetivoEvento','DesarrolloEvento','ConclucionEvento','ArchivoEvento','NombreArchivoEvento'];
	protected $guarded = ['IdEvento'];

}
