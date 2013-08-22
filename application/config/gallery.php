<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CI Gallery</title>
</head>
<body>

	<div id="gallery">
		
	</div>

	<div id="upload">
		<?php 
			echo from_open_multipart('gallery');
		 ?>
	</div>
	
</body>
</html>