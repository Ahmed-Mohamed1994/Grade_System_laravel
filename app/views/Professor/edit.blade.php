
 @extends('../includes/sidebar')
 @section('content')

<?php
$view1 = new Administrator();
$view=$view1->object;

$id = Session::get('key');

$user = $view->view('Professor',"where_first",'id','=',"$id",'');


?>



<div class="row">
	<div class="col-md-12">

		<div class="panel panel-primary" data-collapsed="0">

			<div class="panel-heading">
				<div class="panel-title">
					<h2>Edit Teacher</h2>
				</div>

			</div>

			<div class="panel-body">


				<form role="form" class="form-horizontal form-groups-bordered" method="post" enctype="multipart/form-data" action="edit_prof=<?php echo $id?>">

					<!-- inputs -->

					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label">Name</label>

						<div class="col-sm-9">
							<input type="text" class="form-control" id="field-1" placeholder="Name" name="e_name" value="<?php echo $user->name;?>" required>
						</div>
					</div>
					<div class="form-group">
                                        						<label for="field-1" class="col-sm-2 control-label">Mail</label>

                                        						<div class="col-sm-9">
                                        							<input type="text" class="form-control" name="e_mail" id="field-1" placeholder="Address Field" value="<?php echo $user->Mail;?>" required>
                                        						</div>
                                        					</div>

									<div class="form-group">
                                						<label for="field-1" class="col-sm-2 control-label">Phone</label>

                                						<div class="col-sm-9">
                                							<input type="text" class="form-control" name="e_phone" id="field-1" placeholder="Address Field" value="<?php echo $user->Phone;?>" required>
                                						</div>
                                					</div>


					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label">Address</label>

						<div class="col-sm-9">
							<input type="text" class="form-control" name="e_Address" id="field-1" placeholder="Address Field" value="<?php echo $user->Address;?>" required>
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