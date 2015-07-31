<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZonasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('zonas', function(Blueprint $table)
		{
			$table->bigIncrements('IdZona');
			$table->string('NombreZona');
			$table->string('DescripcionZona');
			$table->bigInteger('IdSede');
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
		Schema::drop('zonas');
	}

}
