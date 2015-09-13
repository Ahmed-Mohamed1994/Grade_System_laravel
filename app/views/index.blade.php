    @extends('main/main')
    @section('head')


       	<meta charset="utf-8">
       	<meta http-equiv="X-UA-Compatible" content="IE=edge">

       	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
       	<meta name="description" content="Neon Admin Panel" />
       	<meta name="author" content="Laborator.co" />

       	<title>Neon</title>


       	<link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css"  id="style-resource-1">
       	<link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css"  id="style-resource-2">
       	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic"  id="style-resource-3">
       	<link rel="stylesheet" href="assets/css/bootstrap-min.css"  id="style-resource-4">
       	<link rel="stylesheet" href="assets/css/neon-core-min.css"  id="style-resource-5">
       	<link rel="stylesheet" href="assets/css/neon-theme-min.css"  id="style-resource-6">
       	<link rel="stylesheet" href="assets/css/neon-forms-min.css"  id="style-resource-7">
       	<link rel="stylesheet" href="assets/css/custom-min.css"  id="style-resource-8">

       	<script src="assets/js/jquery-1.11.0.min.js"></script>
       <script>$.noConflict();</script>

       	<!--[if lt IE 9]><script src="http://demo.neontheme.com/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

       	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
       	<!--[if lt IE 9]>
       		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
       		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
       	<![endif]-->


       	<!-- TS1403660437: Neon - Responsive Admin Template created by Laborator -->


    @stop

    @section('body')

    <?php
    $type=Session::get('type2');

if(Request::is('/') ||Request::is("login=".$type)|| Request::is('index='.Session::get('random')))
    {

    ?>

   <body class="page-body page-fade " data-url="http://demo.neontheme.com" style="overflow: hidden">

   <?php } else {?>
    <body class="page-body page-fade " data-url="http://demo.neontheme.com" style="">

   <?php } ?>

   <div class="page-container">

@yield('sidebar')



</div>






  <link rel="stylesheet" href="assets/js/dropzone/dropzone.css"  id="style-resource-1">


  <link rel="stylesheet" href="assets/js/datatables/responsive/css/datatables.responsive.css"  id="style-resource-1">
  <link rel="stylesheet" href="assets/js/select2/select2-bootstrap.css"  id="style-resource-2">
  <link rel="stylesheet" href="assets/js/select2/select2.css"  id="style-resource-3">

<link rel="stylesheet" href="assets/js/selectboxit/jquery.selectBoxIt.css"  id="style-resource-3">
  <link rel="stylesheet" href="assets/js/daterangepicker/daterangepicker-bs3.css"  id="style-resource-4">

  <link rel="stylesheet" href="assets/js/jvectormap/jquery-jvectormap-1.2.2.css"  id="style-resource-1">
  <link rel="stylesheet" href="assets/js/rickshaw/rickshaw.min.css"  id="style-resource-2">


<script src="assets/js/fileinput.js" id="script-resource-8"></script>
  <script src="assets/js/dropzone/dropzone.js" id="script-resource-9"></script>
  
  
    
  <script src="assets/js/gsap/main-gsap.js" id="script-resource-1"></script>
  <script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js" id="script-resource-2"></script>
  <script src="assets/js/bootstrap.min.js" id="script-resource-3"></script>
  <script src="assets/js/joinable.js" id="script-resource-4"></script>
  <script src="assets/js/resizeable.js" id="script-resource-5"></script>
  <script src="assets/js/neon-api.js" id="script-resource-6"></script>
  <script src="assets/js/cookies.min.js" id="script-resource-7"></script>
  <script src="assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js" id="script-resource-8"></script>
  <script src="assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js" id="script-resource-9"></script>
  <script src="assets/js/jquery.sparkline.min.js" id="script-resource-10"></script>
  <script src="assets/js/rickshaw/vendor/d3.v3.js" id="script-resource-11"></script>
  <script src="assets/js/rickshaw/rickshaw.min.js" id="script-resource-12"></script>
  <script src="assets/js/raphael-min.js" id="script-resource-13"></script>
  <script src="assets/js/morris.min.js" id="script-resource-14"></script>
  <script src="assets/js/toastr.js" id="script-resource-15"></script>
  <script src="assets/js/neon-chat.js" id="script-resource-16"></script>
  <script src="assets/js/neon-custom.js" id="script-resource-17"></script>
  <script src="assets/js/neon-demo.js" id="script-resource-18"></script>
  <script src="assets/js/neon-skins.js" id="script-resource-19"></script>
    
    
  <script src="assets/js/bootstrap-tagsinput.min.js" id="script-resource-9"></script>
  <script src="assets/js/typeahead.min.js" id="script-resource-10"></script>
  <script src="assets/js/selectboxit/jquery.selectBoxIt.min.js" id="script-resource-11"></script>
  <script src="assets/js/bootstrap-datepicker.js" id="script-resource-12"></script>
  <script src="assets/js/bootstrap-timepicker.min.js" id="script-resource-13"></script>
  <script src="assets/js/bootstrap-colorpicker.min.js" id="script-resource-14"></script>
  <script src="assets/js/daterangepicker/moment.min.js" id="script-resource-15"></script>
  <script src="assets/js/daterangepicker/daterangepicker.js" id="script-resource-16"></script>
  <script src="assets/js/jquery.multi-select.js" id="script-resource-17"></script>
   
    
    

  
  <script src="assets/js/jquery.dataTables.min.js" id="script-resource-8"></script>
  <script src="assets/js/datatables/TableTools.min.js" id="script-resource-9"></script>
  <script src="assets/js/dataTables.bootstrap.js" id="script-resource-10"></script>
  <script src="assets/js/datatables/jquery.dataTables.columnFilter.js" id="script-resource-11"></script>
  <script src="assets/js/datatables/lodash.min.js" id="script-resource-12"></script>
  <script src="assets/js/datatables/responsive/js/datatables.responsive.js" id="script-resource-13"></script>
  <script src="assets/js/select2/select2.min.js" id="script-resource-14"></script>

   <script src="ckeditor/ckeditor.js"></script>


    
    
    
  <script type="text/javascript">
    
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-28991003-3']);
    _gaq.push(['_setDomainName', 'laborator.co']);
    _gaq.push(['_setAllowLinker', true]);
    _gaq.push(['_trackPageview']);
    
    (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
    
  </script>

  
    </div>
    </div>
    </div>
    @stop





