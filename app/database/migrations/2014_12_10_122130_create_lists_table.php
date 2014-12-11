<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lists',function($table)
		{
		/* Set up PK & AI */
		$table->increments('id');
		
		/* Create created_at & updated_at */
		$table->timestamps();
		
		
		/* Populate Table */
		$table->string('name');
			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('lists');
	}

}
