

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
					<h2>Start ID Controller</h2>
				</div>

			</div>

			<div class="panel-body">

				<form role="form" class="form-horizontal form-groups-bordered" method="post" enctype="multipart/form-data" action="Add_ID">

					<!-- inputs -->

					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label">Start ID</label>

						<div class="col-sm-9">
							<input type="text" class="form-control" id="field-1" placeholder="ID" name="num" required>
						</div>
					</div>



					<!-- buuton -->
					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label"></label>

						<div class="col-sm-9">
							<input type="submit"  class="btn btn-primary " value="Add ID">
						</div>
					</div>


				</form>

			</div>

		</div>

	</div>
</div>


@stop