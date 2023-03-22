<!doctype html>
<html lang="en">
	<head>
		<?php
			header("access-control-allow-origin: *");
		?>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>		
		<h1>Games API</h1>
		<h2>Game 1</h2>
		<p id="gameTitle">Game Title</p>
		<p>Game Image</p>
		<p>Game Price</p>
		<p>Game Publish Date</p>
		<p>Game Basic Description</p>
		<p>Game Developer and Company<p>
		<p>Button Info -- Button Save -- Button Buy</p>
		<br>
		<script>
			fetch('https://www.freetogame.com/api/games')

			// Convert response string to json object
			.then(response => {

				// Display whole API response in browser console
				console.log(response);
				document.getElementById("gameTitle").innerHTML = response.title;
			
			})
			.catch(err => {
		
				// Display errors in console
				console.log(err);
			});

		</script>
	<body>
</html>