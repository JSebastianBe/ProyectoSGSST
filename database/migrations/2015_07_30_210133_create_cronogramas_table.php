<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCronogramasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cronogramas', function(Blueprint $table)
		{
			$table->bigIncrements('IdCronograma');
			$table->dateTime('FechaProgramacion');
			$table->dateTime('FechaEvento');
			$table->bigInteger('IdSede');
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
		Schema::drop('cronogramas');
	}

}
