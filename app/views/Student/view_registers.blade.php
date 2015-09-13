
 @extends('../includes/sidebar')
 @section('content')




 <form role="form" class="form-horizontal form-groups-bordered" method="post" enctype="multipart/form-data" action="">

<div class="row">
	<div class="col-md-12">



	<div class="panel-footer">
				<div class="panel-title">

	<div class="form-group">

                          	<center><div class="col-sm-10">
                          	<h2>All Courses</h2>
                          	</div></center>
                          					</div>
				</div>

			</div>
				<div class="panel-body">


<table class="table table-striped">
			<thead>


				<tr>
					<th>Course Name</th>
					<th>Professor Name</th>
					<th>Teacher Name</th>
				</tr>
			</thead>
	<tbody>
<?php
           $view_object = new student();
           $view_obj = $view_object->object;

$users = DB::table('users_login')
                    ->orderBy('id', 'desc')->first();
    $stu_id = $users->user_session;
$student_id=$view_obj->view('students',"where_pluck",'stu_id','=',$stu_id,'id');

$views = $view_obj->view('register_course_section',"where_get",'student_id',"=",$student_id,'');


       foreach ($views as $view){

/**/

?>


		<tr class="gradeU">
			<td>{{ $view_obj->view('course',"where_pluck",'id','=',"$view->course_id",'name'); }}</td>

			<td>
        <?php $course_id = $view_obj->view('course',"where_pluck",'id','=',"$view->course_id",'id');

                $prof_id = $view_obj->view('prof_course',"where_pluck",'course_id','=',"$course_id",'prof_id');

                $prof_name = $view_obj->view('professor',"where_pluck",'id','=',"$prof_id",'name');

                echo $prof_name;
        ?>

			</td>

			<td><?php $teacher_id = $view_obj->view('sub_teacher',"where_pluck",'id','=',"$view->sub_teacher_id",'teacher_id');
			$teacher_name = $view_obj->view('teacher',"where_pluck",'id','=',"$teacher_id",'name');
			if($teacher_name)
			echo $teacher_name;
			else
			echo "<span style='font-weight: bold;color: red'>None</span>";
			?></td>

		</tr>
<?php
}

?>


	</tbody>

</table>
</div>

</div>
</div>

	<div class="panel-footer">
				<div class="panel-title">

	<div class="form-group">
                          						<label for="field-1" class="col-md-10 control-label"></label>

                          	<div class="col-sm-10">
                                         		<input type="submit" class="btn btn-primary " value="Update">
                          	</div>
                          					</div>
				</div>

			</div>


</form>

@stop