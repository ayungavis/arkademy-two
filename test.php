<?php 

	
	$n = 7;
	$result = '';
	for ($y = 1; $y <= $n; $y++) { 
		for ($x = 1; $x <= $n ; $x++) { 
			if ($x == 1 || $y == 1 || $x == $n || $y == $n || $x == ($n/2)+0.5) {
				echo '*';
			}
			else echo '+';
		}
		echo '<br/>';
	}
?>