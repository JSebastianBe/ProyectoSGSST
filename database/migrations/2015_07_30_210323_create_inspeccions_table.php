<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInspeccionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inspeccions', function(Blueprint $table)
		{
			$table->bigIncrements('IdInspeccion');
			$table->string('TipoInspeccion');
			$table->dateTime('FechaInspeccion');
			$table->float('IndicadorPrimeraV');
			$table->float('IndicadorSegundaV');
			$table->binary('ArchivoInspeccion');
			$table->text('NombreArchivoInspeccion');
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
		Schema::drop('inspeccions');
	}

}
