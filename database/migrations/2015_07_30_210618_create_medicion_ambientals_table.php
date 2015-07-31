<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicionAmbientalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('medicion_ambientals', function(Blueprint $table)
		{
			$table->bigIncrements('IdMedicionAmbiental');
			$table->bigInteger('MedicionFactor');
			$table->string('MedidaControlFactor');
			$table->bigInteger('IdRiesgoDebil'); 
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
		Schema::drop('medicion_ambientals');
	}

}
