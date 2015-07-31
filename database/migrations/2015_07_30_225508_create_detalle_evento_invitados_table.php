<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleEventoInvitadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalle_evento_invitados', function(Blueprint $table)
		{
			$table->bigIcrements('IdEventoInvitado');
			$table->bigInteger('IdInvitado');
			$table->bigInteger('IdEvento');
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
		Schema::drop('detalle_evento_invitados');
	}

}
