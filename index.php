<!DOCTYPE html>
<html lang="Zh-cn">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=dege">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<title>厦大学号查询系统</title>
		<script src="showInfo.js"></script>
		
		<!-- Bootstrap -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	</head>
	<body>
		<div class="container">
            <h1	class="text-center">欢迎查询厦大学生学号<br/>
				<small>想追男神女神，来这里试试！</small></h1>
			<div class="text-center">
				<form class="form-inline">
					<label for="InputName">大名</label>
					<input type="text" class="form-comtrol" id="name"  placeholder="刘娜" onkeyup="showInfo(this.value)"/>
                </form><br/>
				<table class="table table-striped table-responsive table-condensed" id="result"></table>
			</div>
			<div class="text-center"><b>版权所有 &copy; <a href="http://weibo.com/zhendezhendong">真的振东</a></b>
            </div> 
    	</div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    	<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>
    	<!-- Include all compiled plugins (below), or include individual files as needed -->
    	<script src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>