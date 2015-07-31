<?php namespace ProyectoSGSST\Models;

use Illuminate\Database\Eloquent\Model;

class DetalleEventoInvitado extends Model {

	protected $table = 'detalleeventoinvitado';
	protected $fillable = ['IdInivitado','IdEvento'];
	protected $guarded = ['IdEventoInvitado'];

}
