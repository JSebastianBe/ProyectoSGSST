<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleSeguimientoPersonasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalle_seguimiento_personas', function(Blueprint $table)
		{
			$table->bigIncrements('IdDetalleSeguimientoPersona');
			$table->string('RolPersona');
			$table->bigInteger('IdSeguimiento');
			$table->bigInteger('IdPersona');
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
		Schema::drop('detalle_seguimiento_personas');
	}

}
