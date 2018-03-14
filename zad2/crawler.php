 <!DOCTYPE html>
<html>
	<body>

		<form name="form" action="" method="get">
			<input type="text" name="url" id="url">
			<input type="submit" name="crawl" value="Crawl!">
		</form>
	

		<?php 
			if(isset($_GET["url"])){
				//$enc = urlencode($_GET["url"]);
				$url = "'".$_GET["url"]."'"; 
				echo $url;

				$page = file_get_contents($url);
				echo $page;
			}
		?>

	</body>
</html> 