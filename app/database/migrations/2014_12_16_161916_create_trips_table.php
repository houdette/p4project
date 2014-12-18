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
		Schema::create('trips', function($table){
     
       /* Set up PK and AI */
       $table->increments('id');
 
       /* Set up fields 'created_at & updated_at */
       $table->timestamps();
       
        /* Populate the table */
        $table->string('name');
        $table->integer('duration')->nullable();
 
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
