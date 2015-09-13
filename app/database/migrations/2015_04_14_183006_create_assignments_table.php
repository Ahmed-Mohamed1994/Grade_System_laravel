<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('assignments', function(Blueprint $table)
		{
			$table->increments('id');

            $table->integer('student_id')->unsigned();
            $table->integer('course_id')->unsigned();
            $table->integer('sub_teacher_id')->unsigned();
            $table->text('class_assignment');
            $table->text('student_assignment');
            $table->date('deadline_day');
            $table->time('deadline_time');
            $table->double('assignment_grade');
            $table->double('student_grade');


            $table->foreign('student_id')
                ->references('id')->on('students')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('course_id')
                ->references('id')->on('course')
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
		Schema::drop('assignments');
	}

}
