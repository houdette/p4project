<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTripsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trips',function($table)
		{
		/* PK, AI and created_at & updated_at */
		
		$table->increments('id');
		$table->timestamps();
		
		/* Populate the table */
		$table->string('name');
		$table->integer('duration');
		

			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	    Schema::drop('trips');
	 
	}

}
