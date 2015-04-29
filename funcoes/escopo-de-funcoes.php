<?php
	
	$x = 0;
	$nome = "Fran";

	//esse modelo é uma função anonima, uma variavel ta recebendo ela
	$exibe = function ($x) use ($nome){
	//use($variavel) este comando é para chamar a variavel global na função
		echo $x." - ".$nome."<br>";
	};

	$array = [1, 2, 3, 5, 8, 90];

	array_walk($array, $exibe);

?>