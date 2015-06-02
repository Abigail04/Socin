<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productos', function(Blueprint $table)
		{
            $table->increments('id');

            $table->string('idproduct', 10);
			$table->string('descripcion', 50);
			$table->string('unidad', 20);
			$table->string('precioc', 15);
			$table->string('preciov', 15);
			$table->integer('cantidad');

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
		Schema::drop('productos');
	}

}
