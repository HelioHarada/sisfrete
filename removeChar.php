<?php
/*
	Função remover caracteres especiais.
*/
function removeCharacters($n){
	$new = preg_replace('/[^\p{L}\p{N}\s_\-]/', '', $n );
	return $new;
}
print(removeCharacters('The quick green dog!'));
echo '<br>';
print(removeCharacters('D0n$c sed 0di0 du1'));
echo '<br>';
print(removeCharacters('%fd76$fd(-)6GvKlO.'));


/**
 * Teste da remoção de caracteres especiais.
 */
/*
if(removeCharacters('The quick green dog!') =="The quick green dog"){
	print("valido \n");
}else{
	echo 'invalido:  '. removeCharacters('The quick green dog!.');
}


if(removeCharacters('D0n$c sed 0di0 du1') =="D0nc sed 0di0 du1"){
	print("valido \n");
}else{
	echo 'invalido:  '. removeCharacters('D0n$c sed 0di0 du1');
}


if(removeCharacters('%fd76$fd(-)6GvKlO.') =="fd76fd-6GvKlO"){
	print("valido \n");
}else{
	echo 'invalido:  '. removeCharacters('%fd76$fd(-)6GvKlO.');
}*/


?>