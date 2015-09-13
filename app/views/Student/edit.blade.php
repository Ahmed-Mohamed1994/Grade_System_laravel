
 @extends('../includes/sidebar')
 @section('content')

<?php
$view1 = new Administrator();
$view=$view1->object;
$id = Session::get('key');

$user = $view->view('students',"where_first",'id','=',"$id",'');


?>



<div class="row">
	<div class="col-md-12">

		<div class="panel panel-primary" data-collapsed="0">

			<div class="panel-heading">
				<div class="panel-title">
					<h2>Edit Student</h2>
				</div>

			</div>

			<div class="panel-body">


				<form role="form" class="form-horizontal form-groups-bordered" method="post" enctype="multipart/form-data" action="edit_student=<?php echo $id?>">

					<!-- inputs -->

					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label">Name Of Person</label>

						<div class="col-sm-9">
							<input type="text" class="form-control" id="field-1" placeholder="Name" name="e_name" value="<?php echo $user->name;?>" required>
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label">Address Of Person</label>

						<div class="col-sm-9">
							<input type="text" class="form-control" name="e_Address" id="field-1" placeholder="Address Field" value="<?php echo $user->Address;?>" required>
						</div>
					</div>

				<div class="form-group">
                						<label class="col-sm-2 control-label">Birth Date</label>

                						<div class="col-sm-9">
                							<input type="text" class="form-control datepicker" data-start-view="2" name="e_date" placeholder="Birth Date" value="<?php echo $user->Date;?>" required>
                						</div>
                </div>



					<!-- buuton -->
					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label"></label>

						<div class="col-sm-9">
							<input type="submit"  class="btn btn-primary " value="Edit Person" Name="Edit">
						</div>
					</div>

				</form>

			</div>

		</div>

	</div>
</div>


@stop