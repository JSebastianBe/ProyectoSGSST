<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleIncidentePersonasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalle_incidente_personas', function(Blueprint $table)
		{
			$table->bigIncrements('IdDetalleIncidentePersona');
			$table->string('RolPersona');
			$table->bigInteger('IdPersona');
			$table->bigInteger('IdIncidente');
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
		Schema::drop('detalle_incidente_personas');
	}

}
