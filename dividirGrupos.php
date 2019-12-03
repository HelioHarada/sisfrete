<?php

function dividirGrupos($str){
    // tranformar string em array 
    $array_str = str_split($str);
    $compare = '';
    $divido = [];
    $aux = [];

    foreach($array_str as $letter){

        if($compare == ''){			
            $compare = $letter;
        }

        if($compare == $letter){         
            array_push($aux, $letter);  
        }else{
                array_push($divido, implode("", $aux));
                $aux = [];
                array_push($aux, $letter);
                $compare = $letter;
            }
    }
    // Inserir ultimo array
    array_push($divido, implode("", $aux));
    var_dump($divido);
}

/**
 *  Entradas para função dividirGrupos
 */
dividirGrupos("555");
dividirGrupos("5556667788");
dividirGrupos("aaabbbaabbab");
dividirGrupos("abbbcc88999&&!!!_");
?>