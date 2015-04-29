<?php

	function somar($x, $y){
		echo $x + $y;
	}

	$array = [1, 2, 3, 5, 8, 90];

	/*function exemplo($x){
		echo $x."<br>";
	}

	array_walk($array, 'exemplo');*/

	//abaixo é uma função anonima, como é anonima não precisa de nome
	array_walk($array, function ($x){
		echo $x."<br>";
		}
	)

?>