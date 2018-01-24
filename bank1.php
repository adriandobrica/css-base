<?php
session_start();

if(isset($_SESSION["name"])==FALSE)
	$_SESSION["name"] = $_POST["name"];

if(isset($_SESSION["sum"]) == FALSE)
	$_SESSION["sum"] = 1000;

if(isset($_GET["amount"]))
{
	$_SESSION["sum"] = $_SESSION["sum"] - $_GET["amount"];
}

$neg_balance = '"color:red;font-weight: bold;font-size: 160%;"';
$pos_balance = '"color:green;font-weight: bold;font-size: 160%;"';

$pos_btn = '"btn-lg btn-success"';
$neg_btn = '"btn-lg btn-danger"';
#$myfile = fopen("db.txt", "r") or die("Unable to open file!");
#$adrian = fgets($myfile);
#$val_adrian = fgets($myfile);

#$attacker = fgets($myfile);
#$val_attacker = fgets($myfile);

#fclose($myfile);

$name = $_SESSION["name"];
#$val = "1000";

#{
#	if($_POST["name"] === "adrian")
#	{
#		$name = "adrian";
#		$val = $val_adrian;
#	}

#	elseif($_POST["name"] === "attacker")
#	{
#		$name = "attacker";
#		$val = $val_attacker;
#	}
#}

#if(isset($_GET["amount"]))
#{
#	$val = $val - $_GET["amount"];
#}

?>
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
					<a class="navbar-brand" href="#">Web Attacks</a>
				</div>

				<div class="collapse navbar-collapse" id="navigator">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php">Level 1</a></li>
						<li><a href="bank2-login.php">Level 2</a></li>
						<li><a href="bank3-login.php">Level 3</a></li>
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
				<h2>Online Secure Bank</h2>
				<p>Logged in as <span style="color:blue;font-weight: bold;font-size: 160%;"><?php global $name; echo $name; ?></span></p>

				<p style="color:red;font-weight: bold;font-size: 160%;"><?php if($_SESSION["sum"] < 0) echo 'Warning: Negative bank balance!'; ?></p>
			</div>
		</div>

		<div class="container">
		  <form action="<?php ?>" role="form" method="get">
		    <div class="form-group">
		      <label for="name">Balance:</label> <span style=<?php if($_SESSION["sum"] > 0 )echo $pos_balance; else echo $neg_balance; ?>><?php echo $_SESSION["sum"]; ?> lei</span>
		     
		    </div>
		    <p style="font-weight: bold;font-size: 160%;">Online Banking Operations</p>
		    <hr>
			<div class="form-group">
			  <label for="name">Transfer to:</label>
			  <input type="name" class="form-control" id="destname" placeholder="Enter destination username" name="destname">
			 </div>
			<div class="form-group">
			  <label for="amount">Enter amount:</label>
			  <input type="name" class="form-control" id="amount" placeholder="... lei" name="amount">
			</div>
		    <div class="form-group">
		    	<button type="submit" class=<?php if($_SESSION["sum"] > 0 )echo $pos_btn; else echo $neg_btn; ?>>Transfer Money</button>
		    </div>
		  </form>
		</div>


		<div class="container">
			<div class="panel-group" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">
							<a href="#collapse-1" data-toggle="collapse" data-parent="#accordion">
								+ Hint 1
							</a>
						</div><!-- End panel title -->

						<div id="collapse-1" class="panel-collapse collapse">
							<div class="panel-body">
								<ul class="list-group">
									<li class="list-group-item "><code>http://localhost/bank1.php?destname=attacker&amp;amount=5000</code></li>
								</ul>
								<div class="alert alert-success alert-dismissable">
  									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  									Try to access this link.
  								</div>
							</div>
						</div><!-- End Panel collapse -->						
					</div>
				</div>
			</div>

			<div class="panel-group" id="accordion2">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">
							<a href="#collapse-2" data-toggle="collapse" data-parent="#accordion2">
								+ Hint 2
							</a>
						</div><!-- End panel title -->

						<div id="collapse-2" class="panel-collapse collapse">
							<div class="panel-body">
								<ul class="list-group">
									<li class="list-group-item "><code>&lt;img src=http://localhost/bank1.php?destname=attacker&amp;amount=5000&gt;</code></li>
								</ul>
								<div class="alert alert-warning alert-dismissable">
  									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  									Create a web page with this code. Then perform a GET on that page, while still being logged on here.
  								</div>							
							</div>
						</div><!-- End Panel collapse -->	
					</div>
				</div>
			</div>
		</div>
	</body>
</html>