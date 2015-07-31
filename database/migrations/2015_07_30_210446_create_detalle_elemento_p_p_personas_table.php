<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleElementoPPPersonasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalle_elemento_p_p_personas', function(Blueprint $table)
		{
			$table->bigIncrements('IdDetalleElementoPPPersona');
			$table->dateTime('FechaDotacion');
			$table->text('DescripcionDotacion');
			$table->bigInteger('IdPersona');
			$table->bigInteger('IdElementoPP');
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
		Schema::drop('detalle_elemento_p_p_personas');
	}

}
