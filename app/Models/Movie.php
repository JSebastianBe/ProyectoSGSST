<?php namespace EjemploCRUD\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model {

	protected $table = 'movies';
	protected $fillable = ['name' , 'description', 'date'];
	protected $guarded = ['id'];

}
