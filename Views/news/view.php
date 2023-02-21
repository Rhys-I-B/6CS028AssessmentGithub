<html>
	<p id="ajaxArticle"></p>
	
	<h2><?= esc($news['title']) ?></h2>
	<p><?= esc($news['body']) ?></p>
	
	<p><button onclick="getData('<?= esc($news_item['slug'], 'url') ?>')">View article via Ajax</button></p>
	
	<script>
		function getData(slug) 
		{
			
			// Fetch data
			fetch('https://mi-linux.wlv.ac.uk/~2010754/project-root/public/index.php/ajax/get/' + slug)
				
			  // Convert response string to json object
			  .then(response => response.json())
			  .then(response => {

				// Copy one element of response to our HTML paragraph
				document.getElementById("ajaxArticle").innerHTML = response.title + ": " + response.text;
			  })
			  .catch(err => {
				
				// Display errors in console
				console.log(err);
			});
		}
	</script>
</html>