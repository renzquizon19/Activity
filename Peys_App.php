<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Peys App</title>
</head>
<body>
	<?php

		$image = 30;
		$color = '#ff0000';
		if(isset($_GET['btnProcess'])){
			$image = $_GET['photoSize'];
			$color = $_GET['photoBorder'];
		}
	?>

	<form method="get">
		<h2>Peys App</h2>
		<label for="photoSize">Select Photo Size: </label><br>
		<input type="range" name="photoSize" id="photoSize" min="0" max="100"><br>

		<label for="photoBorder">Select Border Color: </label><br>
		<input type="color" name="photoBorder" id="photoBorder"><br>
		<br>
		<button type="submit" name="btnProcess">Process</button>

	</form>
	<br><br>

	<img src="shanks.jpg" alt="" width="<?php echo $image;?>%" border="5%" style="color:<?php echo $color; ?>">
</body>
</html>