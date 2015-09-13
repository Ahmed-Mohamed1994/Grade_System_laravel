<html lang="en"><!-- Mirrored from demo.neontheme.com/extra/login/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jun 2014 02:46:02 GMT --><head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Neon Admin Panel">
	<meta name="author" content="Laborator.co">

	<title>Neon | Login</title>


	<style>.file-input-wrapper { overflow: hidden; position: relative; cursor: pointer; z-index: 1; }.file-input-wrapper input[type=file], .file-input-wrapper input[type=file]:focus, .file-input-wrapper input[type=file]:hover { position: absolute; top: 0; left: 0; cursor: pointer; opacity: 0; filter: alpha(opacity=0); z-index: 99; outline: 0; }.file-input-name { margin-left: 8px; }</style><link rel="stylesheet" href="../../assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css" id="style-resource-1">
	<link rel="stylesheet" href="../../assets/css/font-icons/entypo/css/entypo.css" id="style-resource-2">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic" id="style-resource-3">
	<link rel="stylesheet" href="../../assets/css/bootstrap-min.css" id="style-resource-4">
	<link rel="stylesheet" href="../../assets/css/neon-core-min.css" id="style-resource-5">
	<link rel="stylesheet" href="../../assets/css/neon-theme-min.css" id="style-resource-6">
	<link rel="stylesheet" href="../../assets/css/neon-forms-min.css" id="style-resource-7">
	<link rel="stylesheet" href="../../assets/css/custom-min.css" id="style-resource-8">

	<script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script><script src="../../assets/js/jquery-1.11.0.min.js"></script>
<script>$.noConflict();</script>

	<!--[if lt IE 9]><script src="http://demo.neontheme.com/assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

<script type="text/javascript">
    function get_page(sel) {
       window.location="/login="+ sel.value ;
    }
</script>


	<!-- TS1403660520: Neon - Responsive Admin Template created by Laborator -->
</head>
<body class="page-body login-page login-form-fall loaded login-form-fall-init"  >
     <?php $exists = Session::get('exists') ?>
            @if($exists)
            <div class="alert alert-danger">
            <center>{{ $exists }}</center>
            </div>
            @endif



<div class="login-container">

	<div class="login-header login-caret" style="height: 40%">

		<div class="login-content">

			<a href="/">
            					<div style="font-size: 37px;
                                            color: white;
                                            margin-left: -12px;
                                            font-family: -webkit-pictograph;
                                            font-weight: bold;">
                                                FCIH-Grade System
                                            </div>
            				</a>

			<p class="description">Dear user, log in to access the admin area!</p>

			<!-- progress bar indicator -->
			<div class="">

			</div>
		</div>

	</div>



	<div class="login-form">

		<div class="login-content">

			<div class="form-login-error">
				<h3>Invalid login</h3>
				<p>Enter <strong>demo</strong>/<strong>demo</strong> as login and password.</p>
			</div>
<?php $type=Session::get('type');?>

			<form method="post" role="form"   action="/login=<?=$type?>" >



<div class="form-group">

					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-user"></i>
						</div>

						<select class="form-control" style="background-color:  #373e4a" onChange="get_page(this);" required>
								<option >User Type</option>
                                <option>Administrator</option>
                                <option>Professor</option>
                               <option>Teacher</option>
                               <option>Student</option>
                        </select>
					</div>
</div>

<?php


if($type=="Student")
{



?>
				<div class="form-group">

					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-user"></i>
						</div>

						<input type="text" class="form-control" name="inputid" id="username" placeholder="Student ID" required >
					</div>

				</div>

				<div class="form-group">

					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-key"></i>
						</div>

						<input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" required>
					</div>

				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block btn-login">
						<i class="entypo-login"></i>
						Login In
					</button>
				</div>
<?php } else if($type=="Teacher" || $type=="Professor" || $type=="Administrator" ) { ?>


<div class="form-group">

					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-user"></i>
						</div>

						<input type="text" class="form-control" name="inputmail" id="username" placeholder="Email Of {{$type}} " required="">
					</div>

				</div>

				<div class="form-group">

					<div class="input-group">
						<div class="input-group-addon">
							<i class="entypo-key"></i>
						</div>

						<input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" required="">
					</div>

				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block btn-login">
						<i class="entypo-login"></i>
						Login In
					</button>
				</div>

<?php } ?>


			</form>




		</div>

	</div>

</div>


	<script src="../../assets/js/gsap/main-gsap.js" id="script-resource-1"></script>
	<script src="../../assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js" id="script-resource-2"></script>
	<script src="../../assets/js/bootstrap.js" id="script-resource-3"></script>
	<script src="../../assets/js/joinable.js" id="script-resource-4"></script>
	<script src="../../assets/js/resizeable.js" id="script-resource-5"></script>
	<script src="../../assets/js/neon-api.js" id="script-resource-6"></script>
	<script src="../../assets/js/cookies.min.js" id="script-resource-7"></script>
	<script src="../../assets/js/jquery.validate.min.js" id="script-resource-8"></script>
	<script src="../../assets/js/neon-login.js" id="script-resource-9"></script>
	<script src="../../assets/js/neon-custom.js" id="script-resource-10"></script>
	<script src="../../assets/js/neon-demo.js" id="script-resource-11"></script>
	<script src="../../assets/js/neon-skins.js" id="script-resource-12"></script>
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-28991003-7']);
	  _gaq.push(['_setDomainName', 'demo.neontheme.com']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>



<!-- Mirrored from demo.neontheme.com/extra/login/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Jun 2014 02:46:02 GMT -->
</body></html>