<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiesgoOcupacionalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('riesgo_ocupacionals', function(Blueprint $table)
		{
			$table->bigIncrements('IdRiesgoOcupacional');
			$table->string('NombreRiesgo');
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
		Schema::drop('riesgo_ocupacionals');
	}

}
