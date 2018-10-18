<?php 

$araw = ["Lunes", "Martes", "Miyerkules", "Huwebes", "Biyernes", "Sabado", "Lingo"];
$lyrics = [
			"Nang Tayo'y Magkakilala",
			"Nang Tayo'y Muling Nagkita",
			"Nagtapat Ka Ng Yong Pag-Ibig",
			"Ay Inibig Din Kita",
			"Ay Puno Ng Pagmamahalan",
			"Tayo'y Biglang Nagkatampuhan",
			"Giliw ako'y iyong iniwan"
		];

for ($i = 0; $i < count($araw); $i++) {

	if ($i < count($araw)){
		echo "$araw[$i] " . "$lyrics[$i]". "<br>"; 
	} else {
		echo "wala pong ganoong araw";
	}
	
}



?>