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
<div class="navigationBar col-md-12 col-xs-12 col-sm-12">
		<div class="container">
			<div class="logo pull-left col-md-4 col-xs-12 col-sm-12">
				<span><i class="fa fa-file-text-o"></i> <b> RESUME</b>CREATOR</span>
			</div>
			<div class="pull-right">
				<div class="userArea"><img src="images/resumes.png"> <span> Vahab Valiyev </span> <i class="fa fa-angle-down" id="slideDown"></i></div>
				<div id="userMenu"></div>
			</div>
		</div>
</div>
<div class="selectTemplate col-md-12 col-xs-12 col-sm-12 col-lg-12">
	<p>Select your template </p>
	<div class="container templates col-xs-12 col-md-12">
		<div class="template col-md-3 col-xs-12 col-sm-12"></div>
		<div class="template col-md-3 col-xs-12 col-sm-12"></div>
		<div class="template col-md-3 col-xs-12 col-sm-12"></div>
	</div>
</div>
<script type="text/javascript">
	$("#slideDown").click(function(){
		if($("#userMenu").is(":visible")){
			$(".userArea" ).animate({"border-radius":"20px"}, 50);
		}else{
			$(".userArea" ).animate({"border-radius":"5px"}, 50);
		}
		$("#userMenu").toggle("fast");
	});
</script>
</body>
</html>