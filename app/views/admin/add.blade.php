 @extends('../includes/sidebar')
 @section('content')
        	<?php $success = Session::get('success') ?>
            @if($success)
            <div class="alert alert-success">
            <center>{{$success}}</center>
            </div>
            @endif

            <?php $exists = Session::get('exists') ?>
            @if($exists)
            <div class="alert alert-danger">
            <center>{{$exists}}</center>
            </div>
            @endif
<div class="row">
	<div class="col-md-12">

		<div class="panel panel-primary" data-collapsed="0">
				

			<div class="panel-heading">
				<div class="panel-title">
					<h2>Add administrator</h2>
				</div>
			</div>

			<div class="panel-body">

				<form role="form" class="form-horizontal form-groups-bordered" method="post" enctype="multipart/form-data" action="add_admin">

					<!-- inputs -->

					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label">Name Of Person</label>
						
						<div class="col-sm-9">
							<input type="text" class="form-control" id="field-1" placeholder="Name" name="name" required>
						</div>
					</div>


					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label">Mail Of Person</label>
						
						<div class="col-sm-9">
							<input type="text" class="form-control" name="email" data-validate="email" placeholder="Email Field" required>
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label">Phone Of Person</label>

						<div class="col-sm-9">
							<input type="text" class="form-control" id="field-1" placeholder="Phone" name="Phone" required>
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label">password Of Person</label>
						
						<div class="col-sm-9">
							<input type="password" class="form-control" name="pass" id="field-1" placeholder="Password Field" required>
						</div>
					</div>
						<div class="form-group">
                    						<label for="field-1" class="col-sm-2 control-label">Confirm password</label>

                    						<div class="col-sm-9">
                    							<input type="password" class="form-control" name="pass_confirm" id="field-1" placeholder="Password Field" required>
                    						</div>
                    					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label">Address Of Person</label>
						
						<div class="col-sm-9">
							<input type="text" class="form-control" name="address" id="field-1" placeholder="Address Field" required>
						</div>
					</div>

					
					<div class="form-group">
						<label class="col-sm-2 control-label">Birth date Of Person</label>
						
						<div class="col-sm-9">
							<input type="text" class="form-control datepicker" data-start-view="2" name="birth" placeholder="Birth date Field" required>
						</div>
					</div>

					


					<!-- buuton -->
					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label"></label>

						<div class="col-sm-9">
							<input type="submit"  class="btn btn-primary " value="Add Person" name="Add">
						</div>
					</div>

					
				</form>

			</div>

		</div>

	</div>
</div>

@stop