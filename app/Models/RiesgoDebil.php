<?php namespace ProyectoSGSST\Models;

use Illuminate\Database\Eloquent\Model;

class RiesgoDebil extends Model {

	protected $table = 'riesgodebil';
	protected $fillable = ['IdRiesgoDebil','DescripcionRD','UbicacionEspecificaRD','RegistroFotografico','NombreRegistroFotograficoRD','CalificacionRD','MedidaControlRD','JerarquiaControlRD','IdResponsableRD','IdInspeccion'];
	protected $guarded = ['IdRiesgoDebil'];

}
