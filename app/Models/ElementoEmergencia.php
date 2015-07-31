<?php namespace ProyectoSGSST\Models;

use Illuminate\Database\Eloquent\Model;

class ElementoEmergencia extends Model {

	protected $table = 'elementoemergencia';
	protected $fillable = ['Tipo_elemento','NombreElemento','StockElemento','StockMinElemento'];
	protected $guarded = ['IdElementoEmergencia'];

}
