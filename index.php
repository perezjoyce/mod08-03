<?php 


$a ="1000"; 		// STRING
$b ="+1000"; 		// STRING

if ($a == $b) {		// PHP CONVERTS VALUES INTO INTEGER/NUMBERS WHEN COMPARING 
	echo " 1 " . "<br>";
}

if ($a === $b) {	// MORE SECURE SINCE IT ALSO CHECKS DATA TYPE, NOT JUST VALUE
	echo " 2 " . "<br>"; 
}

// IF BOTH VALUES ARE 1000, 1 2 WILL BE DISPLAYED

$a = 1; $b = 0;
echo ($a AND $b) . "<br>"; 		//null (won't appear)
echo ($a OR $b) . "<br>"; 		//1
echo ($a XOR $b) . "<br>"; 		//1
echo !$a; 						//null (won't appear)

?>