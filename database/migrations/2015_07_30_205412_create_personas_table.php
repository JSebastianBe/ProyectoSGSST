<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personas', function(Blueprint $table)
		{
			$table->bigIncrements('Id_Persona');
			$table->string('TipoDocumentoPersona')->unique();
			$table->bigInteger('DocumentoPersona');
			$table->string('NombrePersona');
			$table->string('ApellidoPersona');
			$table->date('FechaNacimientoPersona');
			$table->char('GeneroPersona');
			$table->string('EPSPersona');
			$table->string('ARPPersona');
			$table->string('TelefonoPersona');
			$table->string('CelularPersona');
			$table->string('RHPersona');
			$table->mediumText('CorreoPersona')->unique();
			$table->mediumText('DireccionPersona');
			$table->char('EstadoCivilPersona');
			$table->string('NivelAcademicoPersona');
			$table->char('EstadoPersona');
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
		Schema::drop('personas');
	}

}
