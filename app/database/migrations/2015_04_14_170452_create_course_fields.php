<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseFields extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('course_fields', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('course_id')->unsigned();
            $table->integer('field_id')->unsigned();
            $table->string('value',500);

            $table->foreign('field_id')
                ->references('id')->on('fields')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('course_id')
                ->references('id')->on('course')
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
		Schema::drop('course_fields');
	}

}
