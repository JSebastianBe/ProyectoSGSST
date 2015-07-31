<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElementoEmergenciasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('elemento_emergencias', function(Blueprint $table)
		{
			$table->bigIncrements('IdElementoEmergencia');
			$table->string('Tipo_elemento');
			$table->string('NombreElemento');
			$table->bigInteger('StockElemento');
			$table->bigInteger('StockMinElemento');
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
		Schema::drop('elemento_emergencias');
	}

}
