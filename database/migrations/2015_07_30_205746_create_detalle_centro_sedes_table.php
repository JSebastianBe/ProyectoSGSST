<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleCentroSedesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalle_centro_sedes', function(Blueprint $table)
		{
			$table->bigIncrements('IdDetalleCentroSede');
			$table->bigInteger('IdSede');
			$table->bigInteger('IdCentro');
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
		Schema::drop('detalle_centro_sedes');
	}

}
