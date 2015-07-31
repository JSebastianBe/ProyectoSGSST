<?php namespace ProyectoSGSST\Models;

use Illuminate\Database\Eloquent\Model;

class StockElemento extends Model {

	protected $table = 'stockelemento';
	protected $fillable = ['CantidadElemento','IdElemento','IdZonaSede'];
	protected $guarded = ['IdStockElemento'];
}
