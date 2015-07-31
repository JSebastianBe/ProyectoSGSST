<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeguimientosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('seguimientos', function(Blueprint $table)
		{
			$table->bigIncrements('IdSeguimiento');
			$table->string('TipoSeguimiento');
			$table->dateTime('FechaSeguimiento');
			$table->text('DescripcionSeguimiento');
			$table->char('GravedadSeguimiento');
			$table->dateTime('FechaControl');
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
		Schema::drop('seguimientos');
	}

}
