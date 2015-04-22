<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Todos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
			Schema::create('todos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('todo');
			$table->boolean('status');
			$table->integer('user_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();

		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */

		public function down()
		{
			Schema::drop('todos');
		}

	

}
