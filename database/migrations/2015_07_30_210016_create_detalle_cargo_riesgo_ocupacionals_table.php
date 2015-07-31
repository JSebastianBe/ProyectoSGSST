<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleCargoRiesgoOcupacionalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalle_cargo_riesgo_ocupacionals', function(Blueprint $table)
		{
			$table->binIncrements('IdDetalleCargoRiesgoOcupacional');
			$table->char('NivelRiesgo');
			$table->bigInteger('IdRiesgo');
			$table->bigInteger('IdCargo');
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
		Schema::drop('detalle_cargo_riesgo_ocupacionals');
	}

}
