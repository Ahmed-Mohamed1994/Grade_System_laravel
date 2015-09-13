
 @extends('../includes/sidebar')
 @section('content')

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
 					<h2>Register Course</h2>
 				</div>

 			</div>

 			<div class="panel-body">

 				<form role="form" class="form-horizontal form-groups-bordered" method="post" enctype="multipart/form-data" action="register_courses_first_step">

 					<!-- inputs -->


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

 								<option value="<?php echo $cor->id ; ?>"><?php echo $cor->name ; ?></option>
 								<?php } ?>
 							</select>

 						</div>
 					</div>

                <?php

                    $users = DB::table('users_login')
                    ->orderBy('id', 'desc')->first();
                    $mail = $users->user_session;
                    $id=$view_courses->view('professor',"where_pluck",'Mail','=',$mail,'id');


                ?>


                 			  <input type="hidden" class="form-control" name="prof_id" value="{{$id}}">



                     <div class="form-group">
                     	<label for="field-1" class="col-sm-2 control-label"></label>

                     	<div class="col-sm-9">
                     		<input type="submit"  class="btn btn-primary " value="Register" name="Add">
                     	</div>
                     </div>

 			    </form>
 			</div>

        </div>

   	</div>
  </div>

 @stop