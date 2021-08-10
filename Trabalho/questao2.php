<?php

function soma($array){
	$resultado = 0;
    foreach($array as $n){
		if(!is_int($n)&& !is_float($n)) continue;
		$resultado += $n;

}
    echo "o resultado da soma dos numeros é igual a:";
    echo $resultado;
}
$a1 = [10,25,21,4];
soma($a1);