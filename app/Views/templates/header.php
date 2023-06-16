<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<style>
			.card-img-top 
			{
				width: 100%;
				height: 200px;
				object-fit: cover;
			}
			
			.stars i
			{
				font-size: 18px;
				color: #28a745;
			}

			.rating-text
			{
				margin-top: 10px;
			}
		</style>
		
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="<?=base_url()?>">CodeIgniter</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="<?=base_url('home')?>">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?=base_url('about')?>">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?=base_url('apis/games')?>">Games</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?=base_url('news')?>">News</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?=base_url('account/login')?>">Login</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?=base_url('account/register')?>">Register</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</body>
</html>