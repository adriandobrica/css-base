<html>
	<body>
		<?php
		$string = $_POST["user"];
		$string = preg_replace('#<script(.*?)>(.*?)</script>#is', '', $string);
		 ?>
		<h1>Testimonials</h1>
		<div id="divID">
			Welcome, <?php echo $string; ?> !
		</div>
	</body>
</html>
