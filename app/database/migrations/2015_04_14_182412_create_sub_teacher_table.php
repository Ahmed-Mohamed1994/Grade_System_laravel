<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubTeacherTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sub_teacher', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('prof_course_id')->unsigned();
            $table->integer('teacher_id')->unsigned();


            $table->foreign('prof_course_id')
                ->references('id')->on('prof_course')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('teacher_id')
                ->references('id')->on('teacher')
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
		Schema::drop('sub_teacher');
	}

}
