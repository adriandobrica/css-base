<html>
	<body bgcolor="red">
		<h1>ATTENTION, YOU HAVE A VIRUS!!!!</h1>
		<img src="virus1.jpg"></img>
		<img src="virus2.png"></img>
		<img src="virus3.png"></img>
		<img src="virus4.jpg"></img>
		<img src="virus5.png"></img>

		<script>
			var i = 0;
			function change() {
	  			var doc = document.body;
	  			var color = ["red", "green"];
	  			doc.style.backgroundColor = color[i];
	  			i = (i + 1) % color.length;
			}
			setInterval(change, 1000);
		</script>
	</body>
</html>