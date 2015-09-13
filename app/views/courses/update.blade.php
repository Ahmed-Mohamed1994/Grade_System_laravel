 @extends('../includes/sidebar')
 @section('content')

<?php 

/*get the id from session*/
$id = Session::get('update_course');

/*select tha data that id has it*/

$view_course1 = new Administrator();
$view_course=$view_course1->object;
$user = $view_course->view('course','where_first','id','=',$id,'');

?>


	<div class="row">
	<div class="col-md-12">

		<div class="panel panel-primary" data-collapsed="0">

			
				

			<div class="panel-heading">
				<div class="panel-title">
					<h2>Update course</h2>
				</div>
			</div>

			<div class="panel-body">

				<form role="form" class="form-horizontal form-groups-bordered" method="post" enctype="multipart/form-data" action="update_course=<?php echo $id ?>">

					<!-- inputs -->

					<div class="form-group">
						<label for="field-1" class="col-sm-2 control-label">Name Of Course</label>
						
						<div class="col-sm-9">
							<input type="text" class="form-control" id="field-1" placeholder="Name Of Course" name="name" required value="<?php echo $user->name ;?>">
						</div>
					</div>
					
					<?php
						/*select all departments*/

					$department = $view_course->view('department',' ',' ',' ',' ','');

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
						<input  class="form-control" id="field-4x" placeholder="Code Of Course" type="text" name="number" required value="<?php echo $user->course_code ;?>">

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
                                          								                    <option value="Yse">Yes</option>
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