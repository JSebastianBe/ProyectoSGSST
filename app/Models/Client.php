<?php namespace EjemploCRUD\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model {

	protected $table = 'clients';
	protected $fillable = ['document', 'document_type', 'name', 'last_name','email', 'telephone'];
	protected $guarded = ['id'];
}
