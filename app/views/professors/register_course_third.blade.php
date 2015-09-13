
 @extends('../includes/sidebar')
 @section('content')


   	<?php

   	      $success = Session::get('success');
   	      $courses=Session::get('course');

   	?>
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
					<h2>All Teachers</h2>
				</div>

			</div>
				<div class="panel-body">

<form role="form" class="form-horizontal form-groups-bordered" method="post" enctype="multipart/form-data" action="register_courses_third_step2=<?php echo $courses ;?>">

<table class="table table-bordered datatable" id="table-1">
	<thead>
		<tr>
			<th data-hide="phone"><center>Choose</center></th>
			<th>Name</th>
			<th data-hide="phone">Address</th>
			<th data-hide="phone,tablet">Phone</th>
			<th>Mail</th>
		</tr>
	</thead>
	<tbody>

<?php


           $view_obj1 = new professor();
           $view_obj =$view_obj1->object;

           $views = $view_obj->view('teacher'," "," "," "," ",'');


             $pro_course_id = $view_obj->view('prof_course',"where_pluck","course_id","=","$courses",'id');

            foreach ($views as $view){
?>

		<tr class="gradeU">
			<td>
			  <center> <input type="checkbox" name="choose_teacher[]" value="<?php echo $view->id;?>" ></center>
			  <center> <input type="hidden" name="prof_id" value="<?php echo $pro_course_id ;?>" ></center>
            </td>
			<td><?php echo $view->name?></td>
			<td><?php echo $view->Address?></td>
			<td class="center"><?php echo $view->Phone?></td>
			<td class="center"><?php echo $view->Mail?></td>

		</tr>



		<?php
		}
		?>
	</tbody>

</table>
<div class="panel-footer">
<div class="form-group">


                            <div class="col-sm-9">
                                 <input type="submit"  class="btn btn-primary " value="Add" name="Add" style="width: 10%">
                         	</div>
                       </div>
</div>
 </form>

</div>












</div>
</div>
</div>


<script type="text/javascript">
var responsiveHelper;
var breakpointDefinition = {
    tablet: 1024,
    phone : 480
};
var tableContainer;

	jQuery(document).ready(function($)
	{
		tableContainer = $("#table-1");

		tableContainer.dataTable({
			"sPaginationType": "bootstrap",
			"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
			"bStateSave": true,


		    // Responsive Settings
		    bAutoWidth     : false,
		    fnPreDrawCallback: function () {
		        // Initialize the responsive datatables helper once.
		        if (!responsiveHelper) {
		            responsiveHelper = new ResponsiveDatatablesHelper(tableContainer, breakpointDefinition);
		        }
		    },
		    fnRowCallback  : function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
		        responsiveHelper.createExpandIcon(nRow);
		    },
		    fnDrawCallback : function (oSettings) {
		        responsiveHelper.respond();
		    }
		});

		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
	});
</script>




@stop

