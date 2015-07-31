<?php namespace ProyectoSGSST\Models;

use Illuminate\Database\Eloquent\Model;

class PlanEmergencia extends Model {

	protected $table = 'planemergencia';
	protected $fillable = ['NombrePlanEmergencia','DescripcionPlanEmergencia','IdDetalleMatrizPeligro'];
	protected $guarded = ['Id_PlanEmergencia'];

}
