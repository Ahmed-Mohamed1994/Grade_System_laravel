 @extends('../includes/sidebar')
 @section('content')
<?php
$users = DB::table('users_login')
                    ->orderBy('id', 'desc')->first();
    $mail = $users->user_session;
    $person_type=$users->type;

    $id = '';


$object = NULL;

$table = '' ;

        if($person_type == 'Administrator')
            {
           $table = 'admin' ;
           $object1=new Administrator();
            $object=$object1->object;
            $id = $object->view('admin',"where_pluck",'mail','=',$mail,'id');
            }
        elseif($person_type == 'Professor')
            {
           $table = 'professor' ;
            $object1=new professor();
            $object=$object1->object;
            $id = $object->view('professor',"where_pluck",'Mail','=',$mail,'id');
            }
        elseif($person_type == 'Teacher')
            {
           $table = 'teacher' ;
            $object1=new teacher();
            $object=$object1->object;
            $id = $object->view('teacher',"where_pluck",'Mail','=',$mail,'id');

            }
        elseif($person_type == 'Student')
            {
           $table = 'students' ;
            $object1=new student();
            $object=$object1->object;
            $id = $object->view('students',"where_pluck",'stu_id','=',$mail,'id');
            }



?>

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
<div class="profile-env">

	<header class="row">

		<div class="col-sm-2">

			<a href="#" class="profile-picture">
				<img src="assets/profile_images/<?php echo $object->view($table,"where_pluck",'id','=',$id,'profile_image');?>" class="img-responsive img-circle" style="width: 115px;height: 115px">
			</a>

		</div>

		<div class="col-sm-7">

			<ul class="profile-info-sections">
				<li>
					<div class="profile-name">
						<strong>
							<a href="#">{{ $object->view($table,"where_pluck",'id','=',$id,'name'); }}</a>
							<a href="#" class="user-status is-online tooltip-primary" data-toggle="tooltip" data-placement="top" data-original-title="Online"></a>
													</strong>
						<span><a href="#">{{ $person_type }}</a></span>
					</div>
				</li>


			</ul>

		</div>


	</header>

	<section class="profile-info-tabs">

		<div class="row">

			<div class="col-sm-offset-2 col-sm-10">

				<ul class="user-details">
					<li>
						<a href="#">
							<i class="entypo-location"></i>
							<?php if($person_type=='Administrator')
							echo $object->view($table,"where_pluck",'id','=',$id,'address');

							else
							{
							echo $object->view($table,"where_pluck",'id','=',$id,'Address');
							}

							?>
						</a>
					</li>

					<li>
						<a href="#">
							<i class="entypo-suitcase"></i>
							Works as <span>{{$person_type}}</span>
						</a>
					</li>

					<li>
						<a href="#">
							<i class="entypo-mail"></i>
							<?php if($person_type=='Student')
                            							echo $object->view($table,"where_pluck",'id','=',$id,'stu_id') ;
                            							elseif($person_type=='Administrator')
                            							{
                            							echo $object->view($table,"where_pluck",'id','=',$id,'mail') ;
                            							}
                            							else
                                  						{
                                                  		echo $object->view($table,"where_pluck",'id','=',$id,'Mail') ;
                                                    	}
                            	?>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="entypo-calendar"></i>
							<?php if($person_type=='Administrator')
							echo $object->view($table,"where_pluck",'id','=',$id,'birth_date');
							else
							{
							echo $object->view($table,"where_pluck",'id','=',$id,'Date');
							}
							?>
						</a>
					</li>
				</ul>


				<!-- tabs for the profile links -->


			</div>

		</div>

	</section>




        					</div>
<div class="panel-body">

				<form role="form" class="form-horizontal form-groups-bordered" method="post" enctype="multipart/form-data" action="profile={{$person_type}}">

                    <div class="form-group">
                            						<label class="col-sm-2 control-label" style="margin-left: 27px">Change profile image</label>

                            						<div class="col-sm-5">

                                                    							<div class="fileinput fileinput-new" data-provides="fileinput"><input type="hidden">
                                                    								<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;" data-trigger="fileinput">
                                                    									<img src="http://placehold.it/200x150" alt="...">
                                                    								</div>
                                                    								<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 6px;"></div>
                                                    								<div>
                                                    									<span class="btn btn-white btn-file">
                                                    										<span class="fileinput-new">Select image</span>
                                                    										<span class="fileinput-exists">Change</span>
                                                    										<input type="file" name="upload" accept="image/*" required>
                                                    									</span>
                                                    									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                    								</div>
                                                    							</div>

                                                    						</div>
                    <br> <br>
                            						</div>
                            							<div class="form-group">
                                                    						<label for="field-1" class="col-sm-2 control-label">Old password Of Person</label>

                                                    						<div class="col-sm-9">
                                                    							<input type="password" class="form-control" name="old_pass" id="field-1" placeholder="Password Field" required>
                                                    						</div>
                                                    					</div>

                                                    					<div class="form-group">
                                                                                        <label for="field-1" class="col-sm-2 control-label">New password Of Person</label>

                                                                                                   <div class="col-sm-9">
                                                                                                         <input type="password" class="form-control" name="new_pass" id="field-1" placeholder="Password Field" required>
                                                                               						</div>
                                                                               						</div>
                                                    						<div class="form-group">
                                                                        						<label for="field-1" class="col-sm-2 control-label">Confirm password</label>

                                                                        						<div class="col-sm-9">
                                                                        							<input type="password" class="form-control" name="pass_confirm" id="field-1" placeholder="Password Field" required>
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
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="http://maps.gstatic.com/maps-api-v3/api/js/20/8/main.js"></script>
<script type="text/javascript">
function initialize()
{
	var $ = jQuery,
		map_canvas = $("#sample-checkin");

	var location = new google.maps.LatLng(36.738888, -119.783013),
		map = new google.maps.Map(map_canvas[0], {
		center: location,
		zoom: 14,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		scrollwheel: false
	});

	var marker = new google.maps.Marker({
		position: location,
		map: map
	});
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>

 @stop