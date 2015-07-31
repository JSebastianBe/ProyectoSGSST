<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElementoPPsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('elemento_p_ps', function(Blueprint $table)
		{
			$table->bigIncrements('IdElementoPP');
			$table->string('NombreElementoPP');
			$table->text('DescripcionElementoPP');
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
		Schema::drop('elemento_p_ps');
	}

}
