<?php

	function somar($x, $y){
		echo "Iniciou a execucao";
		return $x + $y;
		//quando chega no retorno ele para a execução
		echo "Terminou";
	}

	$valor = somar(10,20);
	echo $valor;

?>