<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="css/bootstrap.min.css">
	 <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	 <link rel="stylesheet" type="text/css" href="css/style.css">
 	 <script src="jquery-2.2.1.js"></script>
</head>
<body>
<div class="mainWrapper col-md-12">
<div class="verticalAlign"></div>
<!-- Header bar start -->
		<div class="container">
			<div class="logo pull-left col-md-4 col-xs-4 col-sm-4">
				<span><i class="fa fa-file-text-o"></i> <b> RESUME</b>CREATOR</span>
			</div>
			<div class="pull-right col-md-2 col-xs-2 col-sm-2">
				<button class="login col-md-12" id="login">Login</button>
			</div>
		</div>
<!-- Header Bar end -->
<!-- Middle button, text start -->
		<div class="container">
			<div class="middleSection">
				<span>Create Beautiful, Professional Resumes Free</span>
				<div class="verticalAlign"></div>
				<div class="verticalAlign"></div>
				<div class="createStart col-md-4 col-md-offset-4">Lets Create Resume</div>
			</div>
		</div>
<!-- Middle button, text end -->
<div class="verticalAlign"></div>
<div class="verticalAlign"></div>
<img src="images/resumes.png" class="img-responsive center-block resumes pull-bottom">		
</div>
<div class="footerWrapper col-md-12">
	<div class="container">
		<div class="col-md-2 counter col-xs-6 col-sm-6">
		<span><b>200467</b><br><span>Resumes Created</span></span>
		</div>
		<div class="col-md-2 col-xs-6 col-sm-6 counter">
		<span><b>320467</b><br><span>Downloads</span></span>
		</div>
		<div class="col-md-5 col-xs-12 col-sm-12">
			<ul>
				<li>Azerbaycanca</li>
				<li>English</li>
				<li>Deutshc</li>
				<li>Espanol</li>
				<li>Italiano</li>
				<li>Turkce</li>
				<li>Portugales</li>
			</ul>
		</div>
		<div class="col-md-3 col-xs-12 col-sm-12 copyright">
		<span>Resume Creator © 2016. All rights reserved</span>
		</div>
	</div>
</div>
<!-- Login Form -->
<div class="loginForm">
  <div class="loginWrapper">
  	<div class="loginBox col-md-4 col-xs-10 col-sm-10">
  		<p>LOGIN</p>
  		<div class="container col-md-12">
	  		<ul>
	  			<li class="social"><i class="fa fa-facebook"></i>Login with Facebook</li>
	  			<li class="social"><i class="fa fa-google-plus"></i>Login with Google+</li>
	  			<li class="social"><i class="fa fa-twitter"></i>Login with Twitter</li>
	  			<li class="social"><i class="fa fa-linkedin"></i>Login with Linkedin</li>
	  		</ul>
  		</div>
  	</div>
  </div>
</div>
<!-- Login form end -->

<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
 $("#login").click(function(){
 	$(".loginForm").toggle();
 });
 $(".loginForm").click(function(){
 	$(".loginForm").toggle();
 });
</script>
</body>
</html>