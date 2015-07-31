<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegionalsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('regionals', function(Blueprint $table)
		{
			$table->bigIncrements('IdRegional');
			$table->string('TelefonoRegional');
			$table->string('NombreRegional');
			$table->string('CiudadRegional');
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
		Schema::drop('regionals');
	}

}
