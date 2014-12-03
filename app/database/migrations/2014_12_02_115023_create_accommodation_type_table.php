<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccommodationTypeTable extends Migration 
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		 Schema::create('accommodation_type',function($table)
		
		{
		
		  # Pivot table - no PK or AI needed
		 
		  /* Declare the first Foreign Key */
		  $table->integer('accommodation_id')->unsigned();
		  
		  /* Declare the second Foreign Key */
		  $table->integer('type_id')->unsigned();
	
		  
		  /* FK */
		  $table->foreign('accommodation_id')->references('id')->on('accommodations');
		  $table->foreign('type_id')->references('id')->on('types');
		  
		 });
		 
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		 Schema:drop('accommodation_type');
		 
	}

}
