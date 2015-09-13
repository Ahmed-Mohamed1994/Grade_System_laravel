
 @extends('../includes/sidebar')
 @section('content')


<?php $success = Session::get('success') ?>
@if($success)
<div class="alert alert-success">
<center>{{ $success }}</center>
</div>
@endif

 <form role="form" class="form-horizontal form-groups-bordered" method="post" enctype="multipart/form-data" action="teacher_select">

<?php
           $view_obj = new student();


$users = DB::table('users_login')
                    ->orderBy('id', 'desc')->first();
    $stu_id = $users->user_session;
$student_id=$view_obj->object->view('students',"where_pluck",'stu_id','=',$stu_id,'id');

$views = $view_obj->object->view('register_course_section',"where_get",'student_id',"=",$student_id,'');


       foreach ($views as $view){


?>
<div class="row">
	<div class="col-md-12">

		<div class="panel panel-primary" data-collapsed="0">



			<div class="panel-heading">
				<center><div class="panel-title">
					<h2>{{ $view_obj->object->view('course',"where_pluck",'id','=',"$view->course_id",'name'); }}</h2>
				</div></center>
			</div>

		<div class="panel-body">

<table class="table table-striped">
			<thead>


				<tr>
					<th>Choose</th>
					<th>Teacher Name</th>
				</tr>
			</thead>



			<tbody>
			<?php


                        $views2 = $view_obj->object->view('prof_course',"where_get",'course_id','=',"$view->course_id",'');

            			       foreach ($views2 as $view2){

                        $teacher_id = $view_obj->object->view('sub_teacher',"where_get",'prof_course_id','=',"$view2->id",'');

                               foreach ($teacher_id as $view3){


                        ?>
				<tr>
					<td>


			                        <div class="checkbox">
			                        <label>
         <input type="checkbox" name="select_teacher[]" value="{{ $view3->id }}"  multiple="true">
                                     </label>
                               		</div>

                               		</td>


					<td>
                        {{ $view_obj->object->view('teacher',"where_pluck",'id','=',"$view3->teacher_id",'name'); }}
                    </td>


				</tr>
<?php
}
}
?>

			</tbody>
		</table>


		</div>
		</div>
		</div>
		</div>
<?php
}
?>
	<!-- buuton -->


	<div class="panel-footer">
				<div class="panel-title">

	<div class="form-group">
                          						<label for="field-1" class="col-md-10 control-label"></label>

                          	<div class="col-sm-10">
                                         		<input type="submit" class="btn btn-primary " value="Complete Registration">
                          	</div>
                          					</div>
				</div>

			</div>


</form>


 @stop