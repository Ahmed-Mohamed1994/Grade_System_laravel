 @extends('../includes/sidebar')
 @section('content')

<?php 

/*get the id from session*/
$id = Session::get('update_admin');

/*select tha data that id has it*/

$view_admin1 = new Administrator();
$view_admin=$view_admin1->object;
$user = $view_admin->view('admin','where_first','id','=',$id,'');

	


?>


	<div class="row">
	<div class="col-md-12">

		<div class="panel panel-primary" data-collapsed="0">

			
				

			<div class="panel-heading">
				<div class="panel-title">
					<h2>Update administrator</h2>
				</div>
			</div>

			<div class="panel-body">

				<form role="form" class="form-horizontal form-groups-bordered" method="post" enctype="multipart/form-data" action="update_admin=<?php echo $id ?>">

					<!-- inputs -->

					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label">Name Of Person</label>
						
						<div class="col-sm-9">
							<input type="text" class="form-control" id="field-1" placeholder="Name" name="name" required value="<?php echo $user->name; ?>">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label">Phone Of Person</label>

						<div class="col-sm-9">
							<input type="text" class="form-control" id="field-1" placeholder="Phone" name="Phone" required value="<?php echo $user->phone; ?>">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label">Mail Of Person</label>

						<div class="col-sm-9">
							<input type="text" class="form-control" id="field-1" placeholder="Mail" name="Mail" required value="<?php echo $user->mail; ?>">
						</div>
					</div>


					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label">password Of Person</label>
						
						<div class="col-sm-9">
							<input type="text" class="form-control" name="pass" id="field-1" placeholder="Password Field" required value="<?php echo Crypt::decrypt($user->password); ?>">
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label">Address Of Person</label>
						
						<div class="col-sm-9">
							<input type="text" class="form-control" name="address" id="field-1" placeholder="Address Field" required value="<?php echo $user->address; ?>">
						</div>
					</div>

					
					<div class="form-group">
						<label class="col-sm-2 control-label">Birth date Of Person</label>
						
						<div class="col-sm-9">
							<input type="text" class="form-control datepicker" data-start-view="2" name="birth" placeholder="Birth date Field" required value="<?php echo $user->birth_date; ?>">
						</div>
					</div>

					


					<!-- buuton -->
					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label"></label>

						<div class="col-sm-9">
							<input type="submit"  class="btn btn-primary " value="update Person" name="update">
						</div>
					</div>

					
				</form>

			</div>

		</div>

	</div>
</div>
@stop