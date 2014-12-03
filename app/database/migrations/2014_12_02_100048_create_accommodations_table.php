<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccommodationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	    Schema::create('accommodations',function($table)
		
		{
		  /* Set up PK and AI */
		  $table->increments('id');
		  
		  /* Set up fields 'created_at & updated_at */
		  $table->timestamps();
		  
		  /* Declare the Foreign Key */
		  $table->integer('trip_id')->unsigned();
		  
		  /* Populate the table */
		  $table->string('landmarks');
		  $table->string('accommodations');
		  
		  /* FK */
		  $table->foreign('trip_id')->references('id')->on('trips');
		  
		 });
		 
		 
		 
	 }

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
			Schema::drop('accommodations');
		
		  
	}

}
