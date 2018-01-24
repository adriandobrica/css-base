<?php
session_start();

function clear_input($data, $encoding = "UTF-8") {
	return htmlspecialchars($data, ENT_QUOTES, $encoding);
}

class Testimonial
{
    public $name;
    public $msg;
    public $optradio;
}

$client1 = new Testimonial();
$client1->name = 'Ilie Heștianu';
$client1->msg = 'Am cumpărat de la domniile lor și am fost foarte mulțumit, întrucât prețul a fost foarte bun, iar livrarea a fost realizată cu punctualitate.';
$client1->optradio = 'g';


$client2 = new Testimonial();
$client2->name = 'Petrișor Adormisei';
$client2->msg = 'Am cumpărat un produs care mi-a schimbat viața. Mulțumesc acestui site generic pentru această posibilitate!';
$client2->optradio = 'g';

$client3 = new Testimonial();
$client3->name = 'Vasîlîi Росляков';
$client3->msg = 'Очень хороший продукт!';
$client3->optradio = 'g';

$client4 = new Testimonial();
$client4->name = 'Marița Ioniță';
$client4->msg = 'Vai de voi și de capul vostru!';
$client4->optradio = 'b';

?>
<html>
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
						<li><a href="index.php">Level 1</a></li>
						<li><a href="level2.php">Level 2</a></li>
						<li><a href="level3.php">Level 3</a></li>
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
				<h2>Testimonials!</h2>
				<p>Here you can check the opinions of our clients.</p>
			</div>
		</div>

		<div class="container">
  			<h2>Our clients say...</h2>
  			<div class="panel-group">
				<?php
					$test = new Testimonial();
					$test->name = $_POST["name"];
					$test->msg = $_POST["conf"];
					$test->optradio = $_POST["optradio"];

					if(isset($_SESSION['list']))
					{
						$list = $_SESSION['list'];
						array_push($list, $test);
						$_SESSION['list'] = $list;
					}

					else
					{
						$list = array($client1, $client2, $client3, $client4, $test);
						$_SESSION['list'] = $list;
					}

					foreach($_SESSION['list'] as $testimon)
					{
						if($testimon->optradio == 'b')
								echo '<div class="panel panel-danger"><div class="panel-heading"><h4>' . clear_input($testimon->name) . '</h4></div><div class="panel-body"><h4>' . clear_input($testimon->msg) . '</h4></div></div>';
						else
								echo '<div class="panel panel-success"><div class="panel-heading"><h4>' . clear_input($testimon->name) . '</h4></div><div class="panel-body"><h4>' . clear_input($testimon->msg) . '</h4></div></div>';
					}
				?>    			
  			</div>
		</div>
	</body>
</html>