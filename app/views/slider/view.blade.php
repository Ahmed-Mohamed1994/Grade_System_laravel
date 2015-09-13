
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
					<h2>All Images</h2>
				</div>

			</div>
				<div class="panel-body">


<table class="table table-bordered datatable" id="table-1">
	<thead>
		<tr>
			<th data-hide="phone">Image ID</th>

			<th data-hide="phone">Image</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>

<?php


           $view_obj1 = new Administrator();
           $view_obj=$view_obj1->object;

$views = $view_obj->view('slider'," "," "," "," ",'');

       foreach ($views as $view){
?>

		<tr class="gradeU">
			<td><?php echo $view->id?></td>
			<td><img src="assets/images/<?php echo $view->name?>" style="width: 200px;height: 150px;border-radius: 7px;"></td>
	
			<td class="center">

			 <a href="update_slider=<?php echo $view->id?>" class="btn btn-gold btn-sm btn-icon icon-left" sub="delete">
                                                           	<i class="entypo-pencil"></i>
                                                            		Edit
                                                            				</a>

                                                	<a href="delete_slider=<?php echo $view->id?>" class="btn btn-danger btn-sm btn-icon icon-left">
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

