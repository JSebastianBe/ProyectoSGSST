<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCentrosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('centros', function(Blueprint $table)
		{
			$table->bigIncrements('IdCentro');
			$table->bigInteger('CodigoCentro')->unique();
			$table->mediumText('NombreCentro');
			$table->mediumText('DireccionCentro');
			$table->string('TelefonoCentro');
			$table->bigInteger('IdRegional');
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
		Schema::drop('centros');
	}

}
