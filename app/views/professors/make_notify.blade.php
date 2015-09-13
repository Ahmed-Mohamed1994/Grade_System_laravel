
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
					<h2>Make Notify</h2>
				</div>

			</div>
			 <form role="form" class="form-horizontal form-groups-bordered" method="post" enctype="multipart/form-data" action="make_notify">
				<div class="panel-body">

<?php

 						/*select all departments*/

                        $view_courses1 = new professor();
                        $view_courses=$view_courses1->object;

                        $courses = $view_courses->view('course',' ',' ',' ',' ','');

 					?>

 					<div class="form-group">
 						<label class="col-sm-2 control-label">All Courses</label>

 						<div class="col-sm-9">

 							<select class="selectboxit visible" data-first-option="false" style="display: none;" name="courses"  required>
 								<option disabled="disabled">Select Course</option>
 								<?php
 								foreach ($courses as $cor)
 								{
 								?>

 								<option value="<?php echo $cor->name ; ?>"><?php echo $cor->name ; ?></option>
 								<?php } ?>
 							</select>

 						</div>
 					</div>


<br>
                     <div class="form-group ">
                        	<label class="col-sm-2 control-label">Message Subject</label>

                     		<div class="col-sm-3">
							    <input type="text" class="form-control" name="subject" id="field-1" placeholder="Message Subject" required>
                     		</div>

                     		<label class="col-sm-2  control-label">Select Notifier</label>

                            <div class="col-sm-2">
                                <select class="selectboxit visible" data-first-option="false" style="display: none;" name="choose"  required>
 								<option>Select Notifier</option>


 								<option value="students">Students</option>
 								<option value="teacher">Teachers</option>
 							    </select>
 							</div>
 								<div class="col-sm-2" style="  width: 30px;margin-left: 28px;">
                                    <input type="file" name="upload" class="form-control file2 inline btn btn-primary"  data-label="<i class='glyphicon glyphicon-circle-arrow-up'></i> &nbsp;Browse Files" style="left: 19.25px; top: 20.5px;">                                  </div>

                     </div>



<br>

             <div class="form-group">
                <label for="field-1" class="col-sm-2 control-label">Description </label>
                <div class="col-sm-9">
                     <textarea class="span12 ckeditor" id="editor4" name="des"  tabindex="1"  required="required">Contnet Here...</textarea>
                <br />
               </div>
             </div>

             <div class="form-group">
                                  	<label for="field-1" class="col-sm-2 control-label"></label>

                                  	<div class="col-sm-9">
                                  		<input type="submit"  class="btn btn-primary " value="Post" name="notify">
                                  	</div>
                                  </div>

              			    </form>

    </div>
</div>
</div>
</div>


 @stop