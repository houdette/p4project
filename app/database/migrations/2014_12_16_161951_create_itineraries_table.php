<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItinerariesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	 Schema::create('itineraries',function($table)
      { 
     /* Set up PK and AI */
     $table->increments('id');
 
     /* Set up fields 'created_at & updated_at */
     $table->timestamps();
 
     /* Adding field name of the trip */
 
     $table->string('name');
 
  
     $table->string('picture');
 
 
     $table->string('description');
  
     });

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
	 Schema:drop('itineraries');


	}

}
