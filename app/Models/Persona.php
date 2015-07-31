<?php namespace ProyectoSGSST\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model {

	protected $table = 'persona';
	protected $fillable = ['TipoDocumentoPersona','DocumentoPersona','NombrePersona','ApellidoPersona','FechaNacimientoPersona','GeneroPersona','EPSPersona','ARPPersona','TelefonoPersona','CelularPersona','RHPersona','CorreoPersona','DireccionPersona','EstadoCivilPersona','NivelAcademicoPersona','EstadoPersona'];
	protected $guarded = ['IdPersona'];

}
