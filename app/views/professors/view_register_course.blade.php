
 @extends('../includes/sidebar')
 @section('content')


   	<?php $success = Session::get('success') ?>
            @if($success)
            <div class="alert alert-success">
            <center>{{ $success }}</center>
            </div>
            @endif

            <?php $exists = Session::get('exists') ?>
            @if($exists)
            <div class="alert alert-danger">
            <center>{{ $exists }}</center>
            </div>
            @endif






<div class="row">
	<div class="col-md-12">

		<div class="panel panel-primary" data-collapsed="0">

	<div class="panel-heading">
				<div class="panel-title">
					<h2>Professor Information</h2>
				</div>

			</div>
				<div class="panel-body">


<table class="table table-hover">
	<thead>
		<tr>
			<th>Course Name</th>
			<th data-hide="phone">Course Code</th>
			<th data-hide="phone,tablet">Course Department</th>
			<th><center>Actions</center></th>
		</tr>
	</thead>
	<tbody>

<?php


           $view_obj1 = new professor();
           $view_obj=$view_obj1->object;

                               $users = DB::table('users_login')
                               ->orderBy('id', 'desc')->first();
                               $mail = $users->user_session;
                               $id=$view_obj->view('professor',"where_pluck",'Mail','=',$mail,'id');

$views2 = $view_obj->view('prof_course',"where_get","prof_id","=",$id,'');

       foreach ($views2 as $view2){
$view = $view_obj->view('course',"where_first","id","=",$view2->course_id,'');
$departemt = $view_obj->view('department',"where_first","id","=",$view->department,'');

?>

		<tr class="gradeU">
			<td><?php echo $view->name?></td>
			<td><?php echo $departemt->shortcut_of_department ."-".$view->course_code ?></td>
			<td class="center"><?php echo $departemt->name?></td>
			<td class="center">

            <center>
                  <div class="btn-group ">
                  		<button type="button" class="btn btn-blue dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span> Course Action</button>


                  		<ul class="dropdown-menu dropdown-blue" role="menu">
                          <li><a href="view_course_fields={{$view->id}}">View Course Fields</a></li>
                          <li><a href="view_course_teachers={{$view2->id}}">View Course Teachers</a></li>
                          <li><a href="delete_register_course={{$view->id}}">Delete This Course</a></li>
                         </ul>
                   </div>

            </center>


			</td>
		</tr>



		<?php
		}
		?>
	</tbody>

</table>
</div>
</div>
</div>
</div>







@stop

