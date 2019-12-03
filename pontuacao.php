<?php
/**
 * O teste 3 foi efetuado de 2 maneiras. A primeira foi construida de acordo com a problematica 
 * A segunda maneira foi construida de forma aberta idependente de numeros de jogadores
 * pensando de maneira aberta e pensando em futuras possibilidades da implementação
 */

	function calculaPontuacao($pontos){
		$array = str_split($pontos);
		
		$final = array(
			"A" => 0,
			"B" => 0,
			"C" => 0,
		);
		
		foreach($array as $value){
			if($value == "A"){
				$final['A']++;
			}else if($value == "B"){
				$final['B']++;
			}else if($value == "C"){
				$final['C']++;
			}
		}
		var_dump($final);
	}

    calculaPontuacao("A");
    calculaPontuacao("ABC");
	calculaPontuacao("ABCBACC");

?>