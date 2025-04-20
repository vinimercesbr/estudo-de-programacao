<?php
/*
Complete a função que recebe um inteiro não negativo como entrada e retorna uma
lista de todas as potências de com o expoente variando de a ( inclusive ).n^0
n^2.

Exemplos:

n = 0  ==> [1]        # [2^0]
n = 1  ==> [1, 2]     # [2^0, 2^1]
n = 2  ==> [1, 2, 4]  # [2^0, 2^1, 2^2]
*/
//Declarações das varíaveis
$base=2;
$numero_expoente=2;
$lista_expoentes=[];
$contador=0;
$lista_potencias=[];
//Processamento;
while ($contador <= $numero_expoente):
    $lista_expoentes[$contador]=$contador;
    $contador=$contador+1;
endwhile;
//print_r($lista_expoentes);
$contador=0;
foreach ($lista_expoentes as $expoente) {
	$contador=$contador+1;
	$lista_potencias[$contador]=$base**$expoente;
};
print_r($lista_potencias);
?>
