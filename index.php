<?php
// Control page for SignPi
?>
<!doctype html>
<head>
	<title>SignPi Controller</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="initial-scale=1">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>
	<form class="lightcontrols" method="POST" action="scripts/lightcontrol.php">
		<fieldset>
			<legend>Light Controls</legend>
			<label>Color: <input type="color" id="lightcolor" name="lightcolor" value="#ff0000"></label>
			<label>Brightness: <input type="range" id="brightness" name="brightness" min="0" max="225"></label>
		</fieldset>
	</form>
</body>
<footer>

</footer>
</html>
