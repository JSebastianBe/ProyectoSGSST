<?php namespace ProyectoSGSST\Models;

use Illuminate\Database\Eloquent\Model;

class ElementoPP extends Model {

	protected $table = 'elementopp';
	protected $fillable = ['NombreElementoPP','DescripcionElementoPP'];
	protected $guarded = ['IdElementoPP'];

}
