<?php
/**
 * O teste 3 foi efetuado de 2 maneiras. A primeira foi construida de acordo com a problematica 
 * A segunda maneira foi construida de forma aberta idependente de numeros de jogadores será calculado o resultado
 */

function numPlayers ($n){
	$arr = [];

	foreach($n as $value){
		if(!in_array($value,$arr)){
			array_push($arr, $value);
		}
	}
	return $arr;
}

/**
 * Calcular resultados 
*/

function calculaPontuacao($pontos){
	$final = [];
	$n = str_split($pontos);

	$players = numPlayers($n);
	foreach($players as $person){
		$count = 0;
		foreach($n as $score){
			if($person == $score){		
				$count++;	
			}
		}
		array_push($final, $count);
	}
	var_dump($final);
}

calculaPontuacao("A");
calculaPontuacao("ABC");
calculaPontuacao("ABCBACC");
calculaPontuacao("ABCBACCXXAAVV");

?>