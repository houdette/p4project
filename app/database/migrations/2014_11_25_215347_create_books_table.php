<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	Schema::create('books', function($table){
		
		/* Set up PK and AI*/
		$table -> increments ('id');
		
		/* Create fields created at and updated at */
	
		$table -> timestamps();
		
		/* Create fields */

		$table -> string('author');
		$table -> string('title');
		$table -> integer('published');
		

	});
	}
	  
		
	

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('books');
	}

}
