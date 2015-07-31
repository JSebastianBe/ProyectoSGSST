<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockElementosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('stock_elementos', function(Blueprint $table)
		{
			$table->bigIncrements('IdStockElemento');
			$table->bigInteger('CantidadElemento');
			$table->bigInteger('IdElemento');
			$table->bigInteger('IdZonaSede');
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
		Schema::drop('stock_elementos');
	}

}
