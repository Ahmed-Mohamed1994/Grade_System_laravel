
 @extends('../includes/sidebar')
 @section('content')


<?php $success = Session::get('success') ?>
@if($success)

<div class="row">

    <div class="col-md-12">

            <div class="alert alert-success">

                    <center>
                    {{ $success }}
                    </center>

            </div>

    </div>
</div>
@endif






<div class="row">
	<div class="col-md-12">

		<div class="panel panel-primary" data-collapsed="0">

	<div class="panel-heading">
				<div class="panel-title">
					<h2>Student Information</h2>
				</div>

			</div>
				<div class="panel-body">


<table class="table table-bordered datatable" id="table-1">
	<thead>
		<tr>
			<th data-hide="phone">Content ID</th>
			<th>Name</th>
			<th data-hide="phone">Address</th>
			<th data-hide="phone,tablet">Level</th>
			<th>Department</th>
			<th>Student ID</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>

<?php


           $view_obj1 = new Administrator();
           $view_obj=$view_obj1->object;

$views = $view_obj->view('students'," "," "," "," ",'');

       foreach ($views as $view){
?>

		<tr class="gradeU">
			<td><?php echo $view->id?></td>
			<td><?php echo $view->name?></td>
			<td><?php echo $view->Address?></td>
			<td class="center"><?php echo $view->level?></td>
			<td class="center"><?php echo $view->Department?></td>
			<td class="center"><?php echo $view->stu_id?></td>
			<td class="center">

			 <a href="edit_student=<?php echo $view->id?>" class="btn btn-gold btn-sm btn-icon icon-left" sub="delete">
                                                           	<i class="entypo-pencil"></i>
                                                            		Edit
                                                            				</a>

                                                	<a href="delete_student=<?php echo $view->id?>" class="btn btn-danger btn-sm btn-icon icon-left">
                                                           	<i class="entypo-cancel"></i>
                                                            		Delete
                                                           </a>
			</td>
		</tr>



		<?php
		}
		?>
	</tbody>

</table>
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

