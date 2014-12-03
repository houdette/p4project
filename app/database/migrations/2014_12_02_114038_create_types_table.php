<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('types',function($table)
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
		
	   Schema::drop('types');
		
    }

}
