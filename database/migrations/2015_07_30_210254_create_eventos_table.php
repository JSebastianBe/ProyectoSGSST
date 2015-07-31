<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('eventos', function(Blueprint $table)
		{
			$table->bigIncrements('IdEvento');
			$table->char('TipoEvento');
			$table->string('NombreEvento');
			$table->dateTime('FechaEvento');
			$table->string('TemaEvento');
			$table->longText('ObjetivoEvento');
			$table->longText('DesarrolloEvento');
			$table->longText('ConclucionEvento');
			$table->binary('ArchivoEvento');
			$table->string('NombreArchivoEvento');
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
		Schema::drop('eventos');
	}

}
