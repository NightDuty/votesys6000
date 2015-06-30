<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Addvotekeys extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('votekeys', function(Blueprint $table){
			$table->increments('id');
			$table->string('usernumber', 50)->unique();
			$table->string('password_readable', 4);
			$table->string('password', 256);
			$table->boolean('used', false);
			$table->timestamps();
			$table->rememberToken();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('votekeys');
	}

}
