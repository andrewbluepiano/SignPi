<?php
// Author: Andrew Afonso
// Description: A simple controller that sets the colors on a GPIO controlled LED strip on a RasPi

// Remove the pound from the hexidecimal value passed in
$colorHex = str_replace('#', '', $_POST['lightcolor']);
$brightness = intval($_POST['lightcolor']);

Example

// If a full hexidecimal value
if(strlen($colorHex) == 6){
	// Split the values into their sub RGB values
	$rgb_array = str_split($colorHex, 2);
	
	// Convert from hesidecimal values to RGB values, but also invert the values because... pigpio
	$red = 255 - hexdec($rgb_array[0]);
	$green = 255 - hexdec($rgb_array[1]);
	$blue = 255 - hexdec($rgb_array[2]);
	
	

}
?>
