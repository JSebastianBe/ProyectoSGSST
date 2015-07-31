<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanEmergenciasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('plan_emergencias', function(Blueprint $table)
		{
			$table->bigIncrements('IdPlanEmergencia');
			$table->mediumText('NombrePlanEmergencia');
			$table->text('DescripcionPlanEmergencia');
			$table->bigInteger('IdDetalleMatrizPeligro');
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
		Schema::drop('plan_emergencias');
	}

}
