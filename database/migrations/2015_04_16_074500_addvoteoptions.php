<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Addvoteoptions extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::connection('mysql2')->create('voteoptions', function(Blueprint $table){
			$table->increments('id');
			$table->integer('votemember_id');
			$table->text('hash');
            $table->text('form_hash');
			$table->integer('versionnumber');
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
		Schema::connection('mysql2')->dropIfExists('voteoptions');
	}

}
