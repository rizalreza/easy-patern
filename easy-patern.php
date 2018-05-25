<?php 

	$n=10;

	for ($i=1; $i < $n-1; $i++) { 
		for ($j=($n-$i); $j > 1 ; $j--) { 
			echo " ";
		}


		for ($k=1; $k < $i-1; $k++) { 
			echo " ";
		}
		for ($l=1; $l < $i-2 ; $l++) { 
			echo "x";
		}
		echo PHP_EOL;
	}
	for ($i=1; $i < $n-1 ; $i++) { 
		for ($j=1; $j <$i ; $j++) { 
			echo " ";
		}
		for ($k=($n+1-$i-2); $k >1 ; $k--) { 
			echo "x";
		}
		for ($l=($n-$i-2); $l >1 ; $l--) { 
			echo " ";
		}
		echo PHP_EOL;
	}
?>