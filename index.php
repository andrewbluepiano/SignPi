<?php
/// Author: Andrew Afonso
// Control page for SignPi

// Get current values of LED Strip, inverting the RGB's as per needed, converting the RGB's to hex.
$hexcolor = sprintf("#%02x%02x%02x", (255 - intval(shell_exec("pigs gdc 14"))), (255 - intval(shell_exec("pigs gdc 4"))), (255 - intval(shell_exec("pigs gdc 24"))));

$brightness = intval(shell_exec("pigs gdc 7"));
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
			<label>Color: <input type="color" id="lightcolor" name="lightcolor" value="<?php echo $hexcolor;?>"></label>
			<label>Brightness: <input type="range" id="brightness" name="brightness" value="<?php echo $brightness;?>"  min="0" max="225"></label>
			<input id="updatelights" type="submit" value="Enter">
		</fieldset>
	</form>
</body>
<footer>

</footer>
</html>
