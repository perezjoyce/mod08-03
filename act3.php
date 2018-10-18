<?php 
	// CONVERT FAHRENHEIT TO CELCIUS
	//T(°C) = (T(°F) - 32) × 5/9

	
	function convertToCel($far) {
		$cel = ("$far" - 32) * 5/9;
		echo "$far" . "&#176;F" . " = ". " $cel" . "&#176;C " . "<br>";
	}
	
	convertToCel(68); // 20°C
	convertToCel(32.2); // 0.11111111111°C




?>