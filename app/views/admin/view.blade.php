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
					<h2>View all administrators</h2>
				</div>
			</div>

		<div class="panel-body">

			<table class="table table-bordered datatable dataTable" id="table-1" aria-describedby="table-1_info">
				
				<thead>
					<tr role="row">
						<th data-hide="phone" class="sorting_asc" role="columnheader" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">
							ID Of Person
						</th>
						<th class="sorting" role="columnheader" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">
							Name Of Person
						</th>
						<th data-hide="phone" class="sorting" role="columnheader" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">
							Mail Of Person
						</th>
						<th data-hide="phone" class="sorting" role="columnheader" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">
							Phone Of Person
						</th>
						<th data-hide="phone,tablet" class="sorting" role="columnheader" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">
							Address Of Person
						</th>
						<th class="sorting" role="columnheader" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
							Birth date Of Person
						</th>
						<th class="sorting" role="columnheader" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">
							Action
						</th>
					</tr>
				</thead>
				
				
				<tbody role="alert" aria-live="polite" aria-relevant="all">
					<?php 

					$view_admin1 = new Administrator();
                    $view_admin=$view_admin1->object;
					$administrators = $view_admin->view('admin',' ',' '," ",' ','');
						

						    foreach ($administrators as $admin)
						    {
					?>
						        <tr class="gradeA odd">
									<td class=" "><?php echo $admin->id ?></td>
									<td class=" "><?php echo $admin->name?></td>
									<td class=" "><?php echo $admin->mail ?></td>
									<td class=" "><?php echo $admin->phone ?></td>
									<td class=" "><?php echo $admin->address ?></td>
									<td class=" "><?php echo $admin->birth_date ?></td>
									<td class=" ">
										<a href="update_admin=<?php echo $admin->id ?>" class="btn btn-gold btn-sm btn-icon icon-left">
											<i class="entypo-pencil"></i>
											Edit
										</a>
										
										<a href="delete_admin=<?php echo $admin->id ?>" class="btn btn-danger btn-sm btn-icon icon-left">
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