<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Web Attacks</title>

		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
			.bd-footer {
			padding: 4rem 0;
			margin-top: 4rem;
			font-size: 100%;
			text-align: center;
			background-color: #f7f7f7;
		}       
		</style>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->
	</head>

  	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top" id="navigator">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.php">Web Attacks</a>
				</div>

				<div class="collapse navbar-collapse" id="navigator">
					<ul class="nav navbar-nav">
						<li><a href="index.php">Level 1</a></li>
						<li><a href="bank2-login.php">Level 2</a></li>
						<li class="active"><a href="bank3-login.php">Level 3</a></li>
					</ul>

					<div class="col-sm-3 col-sm-3">
						<form class="navbar-form" role="search">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search" name="q"/>
								<div class="input-group-btn">
									<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
								</div>
							</div>
						</form>
					</div>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="jumbotron">
			<div class="container text-left">
				<h2>Welcome to Secure Bank Online!</h2>
				<p>Our mission is to offer an easy and secure experience with your online bank operations.</p>
			</div>
		</div>

		<div class="container">
		  <form action="bank3.php" role="form" method="post">
		    <div class="form-group">
		      <label for="name">Username:</label>
		      <input type="name" class="form-control" id="name" placeholder="Enter username" name="name">
		    </div>	  	
		    <div class="form-group">
		      <label for="password">OTP:</label>
		      <input type="password" class="form-control" id="password" placeholder="Enter token password" name="password">
		    </div>
			<button type="submit" class="btn-lg btn-success" >Submit</button>
		  </form>
		</div>
	
	</body>
</html>