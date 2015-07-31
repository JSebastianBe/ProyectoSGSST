<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncidentesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('incidentes', function(Blueprint $table)
		{
			$table->bigIncrements('IdIncidentes');
			$table->char('TipoIncidente');
			$table->dateTime('FechaIncidente');
			$table->text('CausasIncidente');
			$table->text('DescripcionIncidente');
			$table->char('GravedadIncidente');
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
		Schema::drop('incidentes');
	}

}
