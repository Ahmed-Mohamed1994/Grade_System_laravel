 @extends('../includes/sidebar')
 @section('content')


<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="position:fixed">
  <!-- Indicators -->


  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" >


    <?php

    					$view_department1 = new Administrator();
    					$view_department=$view_department1->object;
    					$departments = $view_department->view('slider',' ',' '," ",' ','');

                          $count=0;

    						    foreach ($departments as $dep)
    						    {
    						    $count++;
    						    if($count==1)
    						    {
    					?>
    <div class="item active">
      <img src="assets/images/<?php echo $dep->name?>" alt="..." style="height:700PX;width: 100%">

    </div>

<?php } else {?>
 <div class="item ">
      <img src="assets/images/<?php echo $dep->name?>" alt="..." style="height:700PX;width: 100%">

    </div>

<?php }} ?>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev" style="height: 643px">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next" style="height: 643px">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

 @stop