
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
					<h2>Add Student</h2>
				</div>

			</div>

			<div class="panel-body">

				<form role="form" class="form-horizontal form-groups-bordered" method="post" enctype="multipart/form-data" action="add_student">

					<!-- inputs -->

					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label">Name Of Person</label>

						<div class="col-sm-9">
							<input type="text" class="form-control" id="field-1" placeholder="Name" name="name" required>
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label">Address Of Person</label>

						<div class="col-sm-9">
							<input type="text" class="form-control" name="Address" id="field-1" placeholder="Address Field" required>
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