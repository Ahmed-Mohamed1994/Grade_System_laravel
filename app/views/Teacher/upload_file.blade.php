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
 					<h2>Upload File</h2>
 				</div>
 			</div>

 			<div class="panel-body">

 <form role="form" class="form-horizontal form-groups-bordered" method="post" enctype="multipart/form-data" action="upload_file">


                							<div class="fileinput fileinput-new" data-provides="fileinput"><input type="hidden">
                								
                								  {{Form::file('file')}}
                								<div>
                									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                								</div>
                							</div>
                							<div class="form-group">
                           						<label for="field-1" class=" control-label"></label>
                                            	<div class="col-sm-9">
                                                <input type="submit"  class="btn btn-primary " value="Add file" Name="Add">
                          						</div>
                                          </div>
</form>

 			</div>

 		</div>
    </div>
  </div>
 @stop