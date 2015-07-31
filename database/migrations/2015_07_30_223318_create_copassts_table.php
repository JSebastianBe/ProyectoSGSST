<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCopasstsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('copassts', function(Blueprint $table)
		{
			$table->bigIncrements('IdCopasst');
			$table->date('FechaInicioCopasst');
			$table->date('FechaFinCopasst');
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
		Schema::drop('copassts');
	}

}
