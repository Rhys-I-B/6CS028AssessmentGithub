


<!-- ---------- Start of header --------------- -->
		<!-- put all this into the header.php -->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    
	<style>
		
		.card-img-top {
			width: 100%;
			height: 200px;
			object-fit: cover;
		}
		
		.stars i{
			font-size: 18px;
			color: #28a745;
		}

		.rating-text{
			margin-top: 10px;
		}
		


		
	</style>
	
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body class="bg-dark">
  
	<div class="container-lg">
  
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <div class="container-fluid">
			<a class="navbar-brand" href="#">Navbar</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
				  <a class="nav-link active" aria-current="page" href="#">Home</a>
				</li>
				<li class="nav-item">
				  <a class="nav-link" href="#">Link</a>
				</li>
				<li class="nav-item dropdown">
				  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					Dropdown
				  </a>
				  <ul class="dropdown-menu">
					<li><a class="dropdown-item" href="#">Action</a></li>
					<li><a class="dropdown-item" href="#">Another action</a></li>
					<li><hr class="dropdown-divider"></li>
					<li><a class="dropdown-item" href="#">Something else here</a></li>
				  </ul>
				</li>
			  </ul>
			</div>
		  </div>
		</nav>
		<div id="carouselExample" class="carousel slide">
			  <div class="carousel-inner">
				<div class="carousel-item active">
					<img src="#">
				</div>
				<div class="carousel-item">
					<img src="#">
				</div>
				<div class="carousel-item">
					<img src="#">
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
		
		<!-- ---------- End of (header.php) ------------------->
		
		
		
		
		
		
		
		
		
		
		<!-- ---------- Start of (view.php) --------------- -->
		
				<!-- put all this code into the view.php -->

		<br />
		<br />
		
		<div class="container">
			
			
			<div class="jumbotron">
			  <h1 class="display-4 text-center text-white">Lorem Ipsum</h1>
			  <p class="lead text-center text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et tortor nisl. In varius quam at tellus vestibulum venenatis. Cras risus arcu, facilisis quis feugiat vel, iaculis sed risus. Cras sit amet lacus sapien. Nulla suscipit blandit mauris, ac viverra dolor</p>
			  <hr class="my-4 text-white">
			</div>
			
			<br />
			 
			<div class="input-group">
				<input type="text"  class="form-control form-control-lg" placeholder="Search By Keyword..." aria-label="Search Jobs, Keywords" aria-describedby="basic-addon1">
				<button class="btn btn-outline-light text-white" value="Search" fdprocessedid="a2rnqj" type="submit">Search</button>
			</div>
					
		
		</div>
		
		<br />
		<br />
		
		<!-- put this php script into the Controller function -->

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

		
		
		<!-- This is the container which holds the grid and card(s) "only one card is made, and the foreach loop creates a new card for how many games -->

		<div class="container">
			<div class="row">
				<?php foreach ($games["results"] as $game) { ?>
				<div class="col-md-4 mb-4">
					<div class="card border rounded border-white">
						<img class="card-img-top" src="<?php echo $game["background_image"] ?>" alt="<?php echo $game["name"] ?>">
						<div class="card-body">
							<h5 class="card-title text-center"><?php echo $game["name"] ?></h5>
							<p class="card-text text-center">Released: <?php echo $game["released"] ?></p>
							<p class="card-text text-center">Rating: <?php echo $game["rating"] ?>/5</p>
							<div class="d-grid gap-2 d-md-block text-center">
							  <button class="btn btn-dark" type="button">Button</button>
							  <button class="btn btn-dark" type="button">Button</button>
							  <button class="btn btn-dark" type="button">Button</button>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>


<!-- ---------- end of view ----------------->





<!-- ---------- Start of footer --------------- -->
	<!-- put everything below into the footer -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>


<!-- ---------- End of footer --------------- -->
