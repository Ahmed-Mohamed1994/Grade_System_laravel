<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterCourseSectionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('register_course_section', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('student_id')->unsigned();
            $table->integer('sub_teacher_id')->unsigned()->nullable();
            $table->integer('course_id')->unsigned();


            $table->foreign('course_id')
                ->references('id')->on('course')
                ->onDelete('cascade')
                ->onUpdate('cascade');


            $table->foreign('student_id')
                ->references('id')->on('students')
                ->onDelete('cascade')
                ->onUpdate('cascade');


            $table->foreign('sub_teacher_id')
                ->references('id')->on('sub_teacher')
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
		Schema::drop('register_course_section');
	}

}
