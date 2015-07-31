<?php namespace ProyectoSGSST\Models;

use Illuminate\Database\Eloquent\Model;

class Regional extends Model {

	protected $table = 'regional';
	protected $fillable = ['TelefonoRegional','NombreRegional','CiudadRegional'];
	protected $guarded = ['IdRegional'];

}
