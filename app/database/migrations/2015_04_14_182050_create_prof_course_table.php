<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfCourseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('prof_course', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('prof_id')->unsigned();
            $table->integer('course_id')->unsigned();


            $table->foreign('course_id')
                ->references('id')->on('course')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('prof_id')
                ->references('id')->on('professor')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
		Schema::drop('prof_course');
	}

}
