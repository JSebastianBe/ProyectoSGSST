<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatrizPeligrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('matriz_peligros', function(Blueprint $table)
		{
			$table->bigIncrements('IdMatrizPeligro');
			$table->dateTime('FechaModificacion');
			$table->char('CalificacionMatriz');
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
		Schema::drop('matriz_peligros');
	}

}
