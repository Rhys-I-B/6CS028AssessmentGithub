<!doctype html>
<html lang="en">
	<head>
		<title>Games</title>
	</head>
	<body style = "background-color:#FFA500">
	
	<?php

		$api_key = "1bf6cc7d91fa4629bad6901044869b3f"; // Replace with your actual API key
		$url = "https://api.rawg.io/api/games?key=" . $api_key;
		$options = [
			"http" => [
				"header" => "User-Agent: Mozilla/5.0\r\n"
			]
		];
		$context = stream_context_create($options);
		$data = file_get_contents($url, false, $context);
		$games = json_decode($data, true);
	?>
	
	<h1 style = "text-align: center">Codigniter<br>Games</h1>
		<div class="container" style = "background-color:blue; align: center; box-shadow: 5px 5px 10px 10px">
		
			<br>
			<div class="input-group">
				<input type="text"  class="form-control form-control-lg" placeholder="Search By Keyword..." aria-label="Search Jobs, Keywords" aria-describedby="basic-addon1">
				<button class="btn btn-outline-light text-white" value="Search" fdprocessedid="a2rnqj" type="submit">Search</button>
			</div>
			<br>
			
			<div id="carouselExample" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">
				<div class="carousel-item active">
					<img src="https://www.kindpng.com/picc/m/17-175159_xbox-one-games-png-transparent-png.png" width=100% height=400px>
				</div>
				<div class="carousel-item">
					<img src="https://media.gq-magazine.co.uk/photos/645b5c31d8c083bf85029042/16:9/pass/100-best-games-hp-b.jpg" width=100% height=400px>
				</div>
				<div class="carousel-item">
					<img src="https://reciprocity.com/wp-content/uploads/2021/09/blog_ai-risk-management_featured-img_730x270_small.jpg" width=100% height=400px>				
				</div>
				<div class="carousel-item">
					<img src="https://www.digitaltrends.com/wp-content/uploads/2022/07/Xbox-Series-X-and-Playstation-5-ps5.jpg?p=1" width=100% height=400px>				
				</div>
				<div class="carousel-item">
					<img src="https://images.squarespace-cdn.com/content/v1/54104f62e4b0c1ca62ebb56f/1610555155466-JV16WCXAH9AV3BXEGHRA/Office-17.jpg" width=100% height=400px>				
				</div>
				<div class="carousel-item">
					<img src="https://www.stuff.tv/wp-content/uploads/sites/2/2023/02/Best-Xbox-consoles-ever-lead.jpg?w=1080" width=100% height=400px>				
				</div>
			  </div>
			  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			  </button>
			  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			  </button>
			</div>
			
			<br />
			
			<!-- <div class="row">
				<div class="col">
				<h2>Game 1</h2>
					<div class="card" style="width: 24rem;">
						<h4 class="card-title">Game Title</h4>
						<img class="card-img-top" src="..." alt="Card image cap">
						<div class="card-body">
							<h5 class="card-price">Game Price</h5>
							<h5 class="card-date">Game Publish Date</h5>
							<p class="card-text">Game Basic Description</p>
							<h5 class="card-price">Game Price</h5>
							<h5 class="card-price">Game Developer and Company</h5>
							<a href="#" class="btn btn">Button Info</a>
							<a href="#" class="btn btn">Button Save</a>
							<a href="#" class="btn btn">Button Buy</a>
						</div>
					</div>
				</div>
				<div class="col">
					<h2>Game 2</h2>
					<div class="card" style="width: 24rem;">
						<h4 class="card-title">Game Title</h4>
						<img class="card-img-top" src="..." alt="Card image cap">
						<div class="card-body">
							<h5 class="card-price">Game Price</h5>
							<h5 class="card-date">Game Publish Date</h5>
							<p class="card-text">Game Basic Description</p>
							<h5 class="card-price">Game Price</h5>
							<h5 class="card-price">Game Developer and Company</h5>
							<a href="#" class="btn btn">Button Info</a>
							<a href="#" class="btn btn">Button Save</a>
							<a href="#" class="btn btn">Button Buy</a>
						</div>
					</div>
				</div>
				<div class="col">
					<h2>Game 3</h2>
					<div class="card" style="width: 24rem;">
						<h4 class="card-title">Game Title</h4>
						<img class="card-img-top" src="..." alt="Card image cap">
						<div class="card-body">
							<h5 class="card-price">Game Price</h5>
							<h5 class="card-date">Game Publish Date</h5>
							<p class="card-text">Game Basic Description</p>
							<h5 class="card-price">Game Price</h5>
							<h5 class="card-price">Game Developer and Company</h5>
							<a href="#" class="btn btn">Button Info</a>
							<a href="#" class="btn btn">Button Save</a>
							<a href="#" class="btn btn">Button Buy</a>
						</div>
					</div>
				</div>
			</div>
			<br> -->
			
				<!-- This is the container which holds the grid and card(s) "only one card is made, and the foreach loop creates a new card for how many games -->
			<div class="container">
				<div class="row">
					<?php foreach ($games["results"] as $game) { ?>
					<div class="col-md-4 mb-4">
						<div class="card border rounded border-white">
							<h5 class="card-title text-center"><?php echo $game["name"] ?></h5>
							<br>
							<img class="card-img-top" src="<?php echo $game["background_image"] ?>" alt="<?php echo $game["name"] ?>">
							<br>
							<div class="card-body">
								<p class="card-text text-center">Released: <?php echo $game["released"] ?></p>
								<p class="card-text text-center">Rating: <?php echo $game["rating"] ?>/5</p>
								<div class="d-grid gap-2 d-md-block text-center">
								  <button class="btn btn-dark" type="button">Save</button>
								  <button class="btn btn-dark" type="button">Info</button>
								  <button class="btn btn-dark" type="button">Buy</button>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	<body>
</html>