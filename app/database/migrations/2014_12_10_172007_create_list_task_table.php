<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListTaskTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('list_task',function($table)
		
		{
		
		  # Pivot table - no PK or AI needed
		 
		  /* Declare the first Foreign Key */
		  $table->integer('list_id')->unsigned();
		  
		  /* Declare the second Foreign Key */
		  $table->integer('task_id')->unsigned();
	
		  
		  /* FK */
		  $table->foreign('list_id')->references('id')->on('lists');
		  $table->foreign('task_id')->references('id')->on('tasks');
		  
		 });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema:drop('list_task');
	}

}
