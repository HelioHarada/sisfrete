# Sisfrete 

### Desafios 

1 - O número de telefone está formatado corretamente?
Crie uma função que aceite uma string e retorne true se estiver no formato de um número
de telefone adequado e false se não estiver. Assuma que qualquer número entre 0 e 9
(nos locais apropriados) produzem um número de telefone válido.
É assim que um número de telefone válido se parece: (123) 456-7890
Exemplos:
isValid("(123) 456-7890") ➞ true
isValid("1111)555 2345") ➞ false
isValid("098) 123 4567") ➞ false
Nota:
Não esqueça o espaço após os parênteses.

2 - Remover os caracteres especiais de uma string
Crie uma função que recebe uma string e remove todos os caracteres "especiais" (por
exemplo,!@#$%^&\*) E retorne a nova string. Os únicos caracteres não alfanuméricos
permitidos são traços -, underscore _ e espaços.
Exemplos:
removeCharacters("The quick green dog!") ➞ "The quick green dog"
removeCharacters("%fd76$fd(-)6GvKlO.") ➞ "fd76fd-6GvKlO"
removeCharacters("D0n$c sed 0di0 du1") ➞ "D0nc sed 0di0 du1"

3 - Sistema de pontuação
Ana, Bruna e Caio estão jogando um jogo de tabuleiro. Os três decidiram criar um novo
sistema de pontuação. A primeira inicial de um jogador ("A", "B" ou "C") indica que o jogador
marcou um único ponto. Dada uma série de letras maiúsculas, retorne uma série de
pontuações dos jogadores.

Por exemplo, se ABBACCCCAC for escrito quando o jogo terminar, Ana marcou 3 pontos,
Bruna marcou 2 pontos e Caio marcou 5 pontos, pois existem 3 ocorrências da letra A, 2
ocorrências da letra B e 5 ocorrências da letra C. Portanto, a matriz [3, 2, 5] deve ser
retornada.
Exemplos:
calculaPontuacao("A") ➞ [1, 0, 0]
calculaPontuacao("ABC") ➞ [1, 1, 1]
calculaPontuacao("ABCBACC") ➞ [2, 2, 3]

4 - Dividir string por caracteres idênticos
Crie uma função que divida uma string em um array de grupos idênticos.
Exemplo:
dividirGrupos("555") ➞ ["555"]
dividirGrupos("5556667788") ➞ ["555", "666", "77", "88"]
dividirGrupos("aaabbbaabbab") ➞ ["aaa", "bbb", "aa", "bb", "a", "b"]
dividirGrupos("abbbcc88999&&!!!_") ➞ ["a", "bbb", "cc", "88", "999",
"&&", "!!!", "_"]
Notas:
- Cada grupo deve ter o mesmo caractere.
- O array retornado deve estar na mesma ordem que a sequência da string passada a
função.
- Deve funcionar com letras, números e outros caracteres.
