<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('name', 30);
			$table->string('appaterno', 30);
			$table->string('apmaterno', 30);
			$table->date('fecha', 10);
			$table->string('direccion', 100);
			$table->string('telefono', 15);
			$table->string('celular', 15);

			$table->string('email', 40)->unique();
			$table->string('contrasena', 60);
			$table->enum('tipo',['Administrador','Gerente','Empleado']);
			$table->string('estado', 10);
			$table->rememberToken();
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
		Schema::drop('users');
	}

}
