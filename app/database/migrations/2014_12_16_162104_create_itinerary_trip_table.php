<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItineraryTripTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	 public function up()
	 {
		
     Schema::create('itinerary_trip', function(Blueprint $table)
		
     {
     $table->increments('id');
     $table->integer('trip_id')->unsigned()->index();
     $table->foreign('trip_id')->references('id')->on('trips');
     
     $table->integer('itinerary_id')->unsigned()->index();
     $table->foreign('itinerary_id')->references('id')->on('itineraries');
     
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
	Schema::drop('itinerary_trip');
	}

}
