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
 					<h2>Add Image</h2>
 				</div>
 			</div>

 			<div class="panel-body">

 <form role="form" class="form-horizontal form-groups-bordered" method="post" enctype="multipart/form-data" action="add_slider">


                							<div class="fileinput fileinput-new" data-provides="fileinput"><input type="hidden">
                								<div class="fileinput-new thumbnail" style="width: 1014px;height: 450px;" data-trigger="fileinput">
                									<img src="assets/images/upload.png" alt="..." style="width: 1014px;">
                								</div>
                								<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 1014px; max-height: 450px; line-height: 6px;"></div>
                								<div>
                									<span class="btn btn-white btn-file">
                										<span class="fileinput-new">Select image</span>
                										<span class="fileinput-exists">Change</span>
                										<input type="file" name="upload" accept="image/*">
                									</span>
                									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                								</div>
                							</div>
                							<div class="form-group">
                           						<label for="field-1" class=" control-label"></label>
                                            	<div class="col-sm-9">
                                                <input type="submit"  class="btn btn-primary " value="Add image" Name="Add">
                          						</div>
                                          </div>
</form>

 			</div>

 		</div>
    </div>
  </div>
 @stop