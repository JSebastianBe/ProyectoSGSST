<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleEventoPersonasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalle_evento_personas', function(Blueprint $table)
		{
			$table->bigIncrements('IdDetalleEventoPersona');
			$table->string('RolPersona');
			$table->bigIntteger('IdPersona');
			$table->bigIntteger('IdEvento');
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
		Schema::drop('detalle_evento_personas');
	}

}
