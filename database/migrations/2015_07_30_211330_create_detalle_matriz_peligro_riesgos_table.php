<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleMatrizPeligroRiesgosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalle_matriz_peligro_riesgos', function(Blueprint $table)
		{
			$table->bigIncrements('IdDetalleMatrizPeligroRiesgo');
			$table->bigInteger('IdRiesgoDebil');
			$table->bigInteger('IdMatrizPeligro');
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
		Schema::drop('detalle_matriz_peligro_riesgos');
	}

}
