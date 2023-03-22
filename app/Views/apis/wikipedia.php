<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
	<?php foreach($links->query->exturlusage->eu as $link):?>
		<h2><?=$link['title']?></h2>
		<p>Links to: <a href='<?=$link['url']?>'><?=$link['url']?></a></p>
		<p>pageid: <?=$link['pageid']?></p>
	<?php endforeach?> 
  </body>
 </html>