<?php namespace ProyectoSGSST\Models;

use Illuminate\Database\Eloquent\Model;

class Invitado extends Model {

	protected $table = 'invitado';
	protected $fillable = ['IdInvitado','DocumentoInvitado','TipoDocumentoInvitado','NombreInvitado','ApellidoInvitado','TelefonoInvitado','CorreoInvitado'];
	protected $guarded = ['IdInvitado'];


}
