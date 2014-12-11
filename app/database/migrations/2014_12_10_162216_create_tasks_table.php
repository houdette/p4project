<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	 Schema::create('tasks',function($table)
		
		{
		  /* Set up PK and AI */
		  $table->increments('id');
		  
		  /* Set up fields 'created_at & updated_at */
		  $table->timestamps();
		  
		  /* Declare the Foreign Key */
		  $table->integer('user_id')->unsigned();
		  
		  /* Populate the table */
		  $table->integer('due_date')->nullable();
		  $table->string('done');
		  
		  /* FK */
		  $table->foreign('user_id')->references('id')->on('users');
		  
		 });
		  

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	 }
	public function down()
	{
		Schema::drop('tasks');
	}

}
