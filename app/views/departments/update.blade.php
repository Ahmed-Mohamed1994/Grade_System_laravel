 @extends('../includes/sidebar')
 @section('content')

<?php 

/*get the id from session*/
$id = Session::get('update_department');

/*select tha data that id has it*/

$view_department1 = new Administrator();
$view_department=$view_department1->object;
$user = $view_department->view('department','where_first','id','=',$id,'');

	


?>


	<div class="row">
	<div class="col-md-12">

		<div class="panel panel-primary" data-collapsed="0">

			
				

			<div class="panel-heading">
				<div class="panel-title">
					<h2>Update department</h2>
				</div>
			</div>

			<div class="panel-body">

				<form role="form" class="form-horizontal form-groups-bordered" method="post" enctype="multipart/form-data" action="update_department=<?php echo $id ?>">

					<!-- inputs -->

					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label">Name Of department</label>
						
						<div class="col-sm-9">
							<input type="text" class="form-control" id="field-1" placeholder="Name Of Department" name="name" required value="<?php echo $user->name; ?>">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label">Shortcut Name Of department</label>
						
						<div class="col-sm-9">
							<input type="text" class="form-control" id="field-1" placeholder="Shortcut Name Of Department" name="short_name" required value="<?php echo $user->shortcut_of_department; ?>">
						</div>
					</div>



					<!-- buuton -->
					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label"></label>

						<div class="col-sm-9">
							<input type="submit"  class="btn btn-primary " value="Add department" name="Add">
						</div>
					</div>
					
				</form>

			</div>

		</div>

	</div>
</div>
@stop