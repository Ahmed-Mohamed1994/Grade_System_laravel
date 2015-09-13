
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
					<h2>Add Professor</h2>
				</div>

			</div>

			<div class="panel-body">

				<form role="form" class="form-horizontal form-groups-bordered" method="post" enctype="multipart/form-data" action="add_prof">

					<!-- inputs -->

					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label">Name Of Teacher</label>

						<div class="col-sm-9">
							<input type="text" class="form-control" id="field-1" placeholder="Name" name="name" required>
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label">Address Of Teacher</label>

						<div class="col-sm-9">
							<input type="text" class="form-control" name="Address" id="field-1" placeholder="Address Field" required>
						</div>
					</div>
										<div class="form-group">
                    						<label for="field-1" class="col-sm-2 control-label">Phone</label>

                    						<div class="col-sm-9">
                    							<input type="text" class="form-control" name="Phone" id="field-1" placeholder="Phone Field" required>
                    						</div>
                    					</div>
                	<div class="form-group">
                   						<label for="field-1" class="col-sm-2 control-label">Mail</label>

                   						<div class="col-sm-9">
                   							<input type="text" class="form-control" name="Mail" id="field-1" placeholder="Mail Field" required>
                   						</div>
                   </div>



				<div class="form-group">
                						<label class="col-sm-2 control-label">Birth Date</label>

                						<div class="col-sm-9">
                							<input type="text" class="form-control datepicker" data-start-view="2" name="date" placeholder="Birth Date" required>
                						</div>
                </div>


					<!-- buuton -->
					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label"></label>

						<div class="col-sm-9">
							<input type="submit"  class="btn btn-primary " value="Add Person" Name="Add">
						</div>
					</div>


				</form>

			</div>

		</div>

	</div>
</div>


@stop