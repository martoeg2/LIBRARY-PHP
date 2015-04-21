<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" src="jscolor/jscolor.js"></script>
	<link type="text/css" rel="stylesheet" href="../color_change/style/style.php" />
</head>
<body>
	<?php
		// BACKGROUND COLOR
		$file = ("{$_SERVER['DOCUMENT_ROOT']}/color_change/base/background_color.txt");
		// check if form has been submitted
		if (isset($_POST['background_color']))
		{
		    // save the background_color contents
		    file_put_contents($file, $_POST['background_color']);
		}
		// read the textfile
		$background_color = file_get_contents($file);


		// TEXT COLOR
		$file = ("{$_SERVER['DOCUMENT_ROOT']}/color_change/base/color.txt");
		// check if form has been submitted
		if (isset($_POST['color']))
		{
		    // save the color contents
		    file_put_contents($file, $_POST['color']);
		    
		    // redirect to form again
		    header(sprintf('Location: %s', $url));
		    printf('<a href="%s">Moved</a>.', htmlspecialchars($url));
		    exit();
		}
		// read the textfile
		$color = file_get_contents($file);
	?>
	<form action="" method="post">
		<input class="color" name="background_color" value="<?php echo htmlspecialchars($background_color) ?>" onchange="document.getElementsByTagName('BODY')[0].style.backgroundColor = '#'+this.color" >
		<input class="color" name="color" value="<?php echo htmlspecialchars($color) ?>" onchange="document.getElementsByTagName('BODY')[0].style.color = '#'+this.color" >
		<input type="submit" value="Запис" />
		<input type="reset" value="Изчисти" />
	</form>

	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem deserunt architecto, sit repudiandae maxime officiis quia, in, molestiae perspiciatis sapiente ipsam! Odit veritatis consequuntur atque vitae qui eligendi a rem.
	
</body>
</html>