<?php 
	// CONVERT FROM CELCIUS TO FAHRENHEIT
	//(0°C × 9/5) + 32 = 32°F

	
	function convertToF($cel) {
		$fa = "$cel" * 9/5 + 32;
		echo "$cel" . "&#176;C" . " = ". " $fa" . "&#176;F " . "<br>";
	}
	
	convertToF(20); // 68°F
	convertToF(4); // 39.2°F




?>