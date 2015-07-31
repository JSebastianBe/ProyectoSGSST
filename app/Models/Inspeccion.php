<?php namespace ProyectoSGSST\Models;

use Illuminate\Database\Eloquent\Model;

class Inspeccion extends Model {

	protected $table = 'inspeccion';
	protected $fillable = ['TipoInspeccion','FechaInspeccion','IndicadorPrimeraV','IndicadorSegundaV','ArchivoInspeccion','NombreArchivoInspeccion','IdPersona'];
	protected $guarded = ['IdInspeccion'];

}
