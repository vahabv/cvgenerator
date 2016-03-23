<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" href="css/bootstrap.min.css">
	 <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	 <link rel="stylesheet" type="text/css" href="css/style.css">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<!-- navigation bar start -->
<nav class="navbar navbar-default navigationBar">
	<div class="container">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><span class="logo"><i class="fa fa-file-text-o"></i> <b> RESUME</b>CREATOR</span></a>
    </div>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle userArea" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="images/resumes.jpg" class="userThumb">Vahab Valiyev <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Profile</a></li>
            <li><a href="#">New Resume</a></li>
            <li><a href="#">Resumes</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Log out</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </div>
</nav>
<!-- navigation bar end -->
<div class="selectTemplate col-md-12 col-xs-12 col-sm-12 col-lg-12">
	<p>Select your template</p>
	<div class="container">
		<div class="col-md-12 col-xs-12 col-sm-12">
			<div class="col-md-4"><div class="template col-md-12 col-xs-12 col-sm-12"></div></div>
			<div class="col-md-4"><div class="template col-md-12 col-xs-12 col-sm-12"></div></div>
			<div class="col-md-4"><div class="template col-md-12 col-xs-12 col-sm-12"></div></div>
		</div>
	</div>
</div>
<script src="jquery-2.2.1.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script type="text/javascript">
	$("#slideDown").click(function(){
		if($("#userMenu").is(":visible")){
			$(".userArea").animate({"border-radius":"20px"}, 50);
		}else{
			$(".userArea").animate({"border-radius":"5px"}, 50);
		}
		$("#userMenu").toggle("fast");
	});
</script>
</body>
</html>