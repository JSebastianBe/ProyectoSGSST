<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiesgoDebilsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('riesgo_debils', function(Blueprint $table)
		{
			$table->bigIncrements('IdRiesgoDebil');
			$table->longText('DescripcionRD');
			$table->string('UbicacionEspecificaRD');
			$table->binary('RegistroFotografico');
			$table->string('NombreRegistroFotograficoRD');
			$table->char('CalificacionRD');
			$table->longText('MedidaControlRD');
			$table->string('JerarquiaControlRD');
			$table->bigInteger('IdResponsableRD');
			$table->bigInteger('IdInspeccion');
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
		Schema::drop('riesgo_debils');
	}

}
