
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
					<h2>Add Course</h2>
				</div>
			</div>

			<div class="panel-body">

				<form role="form" class="form-horizontal form-groups-bordered" method="post" enctype="multipart/form-data" action="add_course">

					<!-- inputs -->

					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label">Name Of Course</label>
						
						<div class="col-sm-9">
							<input type="text" class="form-control" id="field-1" placeholder="Name Of Course" name="name" required>
						</div>
					</div>
					
					<?php
						/*select all departments*/

					$view_department1 = new Administrator();
					$view_department=$view_department1->object;
					$department = $view_department->view('department',' ',' ',' ',' ','');

					?>

					<div class="form-group">
						<label class="col-sm-2 control-label">Depatment Of Course</label>
						
						<div class="col-sm-9">
							
							<select class="selectboxit visible" data-first-option="false" style="display: none;" name="dep" required>
								<option disabled="disabled">Select The Depatment Of Course</option>
								<?php 
								foreach ($department as $dep)
								{
								?>
						 
								<option value="<?php echo $dep->id ; ?>"><?php echo $dep->name ; ?></option>
								<?php } ?>
							</select>

						</div>
					</div>

					<div class="form-group">
						<label for="courseID" class="col-sm-2 control-label">Course Code</label>
						
						<div class="col-sm-9">
						<input type="number" class="form-control" id="field-4x" placeholder="Code Of Course" name="number" required>

						</div>
					</div>

					<div class="form-group">
                    						<label class="col-sm-2 control-label">Houres Of Course</label>

                    						<div class="col-sm-9">

                    							<select class="selectboxit visible" data-first-option="false" style="display: none;" name="houre" required>
                    								<option disabled="disabled">Select The Houre Of Course</option>


                    								<option value="2">2</option>
                    								<option value="3">3</option>

                    							</select>

                    						</div>
                    					</div>

                    					<div class="form-group">
                                        						<label class="col-sm-2 control-label">Practical Of Course</label>

                                        						<div class="col-sm-9">

                                        							<select class="selectboxit visible" data-first-option="false" style="display: none;" name="type" required>
                                        								<option disabled="disabled">Select The Yes Or No</option>
                    								                    <option value="Yes">Yes</option>
                                                            			<option value="No">No</option>

                                        						</select>

                                                                                    						</div>
                                                                                    					</div>

					<!-- buuton -->
					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label"></label>

						<div class="col-sm-9">
							<input type="submit"  class="btn btn-primary " value="Add Course" name="Add">
						</div>
					</div>

					
				</form>

			</div>

		</div>

	</div>
</div>

@stop