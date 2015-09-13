
 @extends('../includes/sidebar')
 @section('content')

 <?php $success = Session::get('success') ?>
	@if($success)
	<div class="alert alert-success ">
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
					<h2>Add department</h2>
				</div>
			</div>

			<div class="panel-body">

				<form role="form" class="form-horizontal form-groups-bordered" method="post" enctype="multipart/form-data" action="add_department">

					<!-- inputs -->

					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label">Name Of department</label>
						
						<div class="col-sm-9">
							<input type="text" class="form-control" id="field-1" placeholder="Name Of Department" name="name" required>
						</div>
					</div>

					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label">Shortcut Name Of department</label>
						
						<div class="col-sm-9">
							<input type="text" class="form-control" id="field-1" placeholder="Shortcut Name Of Department" name="short_name" required >
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