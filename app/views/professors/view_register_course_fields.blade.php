
 @extends('../includes/sidebar')
 @section('content')


   	<?php $success = Session::get('success') ?>
            @if($success)
            <div class="alert alert-success">
            <center>{{ $success }}</center>
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
<?php
$course_id=session::get('view_course_fields');
?>

<table class="table table-hover">
	<thead>
		<tr>

                    <th data-hide="phone,tablet">Field name</th>
                    <th data-hide="phone,tablet">Field value</th>
		            <th><center>Actions</center></th>
		</tr>
	</thead>
	<tbody>

<?php
            $view_obj1 = new professor();
            $view_obj=$view_obj1->object;
                $views2 = $view_obj->view('course_fields',"where_get","course_id","=",$course_id,'');

                foreach ($views2 as $view2){
                    $field_name = $view_obj->view('fields',"where_pluck","id","=",$view2->field_id,'name');

                ?>


				<tr class="gradeU">
        			<td class="center"><?php echo $field_name?></td>
        			<td><?php echo $view2->value?></td>
        			<td class="center">

                    <center>
                          <div class="btn-group ">
                          		<button type="button" class="btn btn-blue dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span> Course Action</button>


                          		<ul class="dropdown-menu dropdown-blue" role="menu">
                                  <li><a href="view_course_fields={{$view2->id}}">View Course Fields</a></li>
                                  <li><a href="register_courses_second_step={{$course_id}}=0">Add Other Fields For This Course</a></li>
                                  <li><a href="delete_register_course_field={{$course_id}}={{$view2->field_id}}">Delete This Course</a></li>
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

