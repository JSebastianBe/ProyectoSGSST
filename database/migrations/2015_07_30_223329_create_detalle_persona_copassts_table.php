<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallePersonaCopasstsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalle_persona_copassts', function(Blueprint $table)
		{
			$table->bigIncrements('IdDetallePersonaCopasst');
			$table->bigInteger('NivelCopasst');
			$table->date('FechaIngresoCopasst');
			$table->bigInteger('IdCopasst');
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
		Schema::drop('detalle_persona_copassts');
	}

}
