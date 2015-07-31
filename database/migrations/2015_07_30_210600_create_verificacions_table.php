<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVerificacionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('verificacions', function(Blueprint $table)
		{
			$table->bigIncrements('IdVerificacion');
			$table->dateTime('FechaVerificacion');
			$table->boolean('AccionImplementada');
			$table->boolean('ControlEfectivo');
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
		Schema::drop('verificacions');
	}

}
