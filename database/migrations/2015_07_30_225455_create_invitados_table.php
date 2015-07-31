<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvitadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('invitados', function(Blueprint $table)
		{
			$table->bigIncrements('IdInvitado');
			$table->bigInteger('DocumentoInvitado')->unique();
			$table->string('TipoDocumentoInvitado');
			$table->string('NombreInvitado');
			$table->string('ApellidoInvitado');
			$table->string('TelefonoInvitado');
			$table->string('CorreoInvitado')->unique();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('invitados');
	}

}
