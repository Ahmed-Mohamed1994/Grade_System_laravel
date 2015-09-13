@extends('../includes/sidebar')
@section('content')

<?php  
	 $success= Session::get('success')
?>
	@if($success)
	<div class="alert alert-success ">
	<center>{{$success}}.</center>
	</div>
	@endif

<div class="row">
	<div class="col-md-12">

		<div class="panel panel-primary" data-collapsed="0">

			

			<div class="panel-heading">
				<div class="panel-title">
					<h2>View all departments</h2>
				</div>
			</div>

		<div class="panel-body">

			<table class="table table-bordered datatable dataTable" id="table-1" aria-describedby="table-1_info">
				
				<thead>
					<tr role="row">
						<th data-hide="phone" class="sorting_asc" role="columnheader" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
							ID Of Department
						</th>
						<th class="sorting" role="columnheader" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
							Name Of Department
						</th>

						<th class="sorting" role="columnheader" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
							Shortcut Name Of Department
						</th>
						
						<th class="sorting" role="columnheader" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
							Action
						</th>
					</tr>
				</thead>
				
				
				<tbody role="alert" aria-live="polite" aria-relevant="all">
					<?php 

					$view_department1 = new Administrator();
					$view_department=$view_department1->object;
					$departments = $view_department->view('department',' ',' '," ",' ','');
						

						    foreach ($departments as $dep)
						    {
					?>
						        <tr class="gradeA odd">
									<td class=" "><?php echo $dep->id ?></td>
									<td class=" "><?php echo $dep->name?></td>
									<td class=" "><?php echo $dep->shortcut_of_department ?></td>
									<td class=" ">
										<a href="update_department=<?php echo $dep->id ?>" class="btn btn-gold btn-sm btn-icon icon-left">
											<i class="entypo-pencil"></i>
											Edit
										</a>
										
										<a href="delete_department=<?php echo $dep->id ?>" class="btn btn-danger btn-sm btn-icon icon-left">
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