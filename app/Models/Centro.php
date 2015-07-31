<?php namespace ProyectoSGSST\Models;

use Illuminate\Database\Eloquent\Model;

class Centro extends Model {

	protected $table = 'centro';
	protected $fillable = ['CodigoCentro','NombreCentro','DireccionCentro','TelefonoCentro','IdRegional'];
	protected $guarded = ['IdCentro'];

}
