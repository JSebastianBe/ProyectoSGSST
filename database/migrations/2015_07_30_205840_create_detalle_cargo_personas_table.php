<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleCargoPersonasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalle_cargo_personas', function(Blueprint $table)
		{
			$table->bigIncrements('IdDetalleCargoPersona');
			$table->bigInteger('IdCargo');
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
		Schema::drop('detalle_cargo_personas');
	}

}
