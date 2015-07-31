<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleSedePersonasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalle_sede_personas', function(Blueprint $table)
		{
			$table->bigIncrements('IdDetalleSedePersona');
			$table->string('TipoRehubicacion');
			$table->text('DescripcionRehubicacion');
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
		Schema::drop('detalle_sede_personas');
	}

}
