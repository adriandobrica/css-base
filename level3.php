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
						<li><a href="index.php">Level 1</a></li>
						<li><a href="level2.php">Level 2</a></li>
						<li class="active"><a href="level3.php">Level 3</a></li>
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
				<h2>Leave your testimonial!</h2>
				<p>Your feedback is important to us, because our mission is to deliver the best product.</p>
			</div>
		</div>

		<div class="container">
		  <form action="testify3.php" role="form" method="post">
		    <div class="form-group">
		      <label for="name">Name:</label>
		      <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
		    </div>	  	
		    <div class="form-group">
		      <label for="email">Email:</label>
		      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
		    </div>
			<div class="form-group">
			  <label for="conf">Feedback:</label>
			  <textarea class="form-control" rows="5" id="conf" name="conf"></textarea>
			</div>
			<div class="form-group">
				<label class="radio-inline">
					<input type="radio" name="optradio" value="g">Good
				</label>
				<label class="radio-inline">
					<input type="radio" name="optradio" value="b">Bad
				</label>
			</div>			
			<button type="submit" class="btn-lg btn-success" >Submit</button>
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
									<li class="list-group-item "><code>&lt;script&gt;alert('This is an innofensive alert')&lt;&#47;script&gt;</code></li>
								</ul>
								<div class="alert alert-success alert-dismissable">
  									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  									This XSS attack is kind of safe to test.
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
									<li class="list-group-item "><code>&lt;script&gt;
for(i=0;;i++)
	alert('This is a bad alert')&lt;&#47;script&gt;</code></li>
								</ul>
								<div class="alert alert-warning alert-dismissable">
  									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  									This XSS attack is annoying (depending on the browser).
  								</div>							
							</div>
						</div><!-- End Panel collapse -->	
					</div>
				</div>
			</div>


			<div class="panel-group" id="accordion3">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">
							<a href="#collapse-3" data-toggle="collapse" data-parent="#accordion3">
								+ Hint 3
							</a>
						</div><!-- End panel title -->

						<div id="collapse-3" class="panel-collapse collapse">
							<div class="panel-body">
								<ul class="list-group">
									<li class="list-group-item "><code>&lt;script&gt;
document.location = 'http://www.gsp.ro'
&lt;&#47;script&gt;</code></li>
								</ul>
								<div class="alert alert-warning alert-dismissable">
  									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  									This XSS attack is annoying.
  								</div>								
							</div>
						</div><!-- End Panel collapse -->						
					</div>
				</div>
			</div>

			<div class="panel-group" id="accordion4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">
							<a href="#collapse-4" data-toggle="collapse" data-parent="#accordion4">
								+ Hint 4
							</a>
						</div><!-- End panel title -->

						<div id="collapse-4" class="panel-collapse collapse">
							<div class="panel-body">
								<ul class="list-group">
									<li class="list-group-item "><code>&lt;script&gt;
document.location = 'evil.php'
&lt;&#47;script&gt;</code></li>
								</ul>
								<div class="alert alert-danger alert-dismissable">
  									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  									This XSS attack is dangerous. *IF EPILEPTIC, DO NOT TRY IT!*
  								</div>								
							</div>
						</div><!-- End Panel collapse -->						
					</div>
				</div>
			</div>			
		</div>		
	</body>
</html>