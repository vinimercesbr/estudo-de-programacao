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
$numero_inteiro=2;
$potencias=[];
$contador=0;
//Processamento;
while ($contador <= $numero_inteiro):
    $potencias[$contador]=$contador;
    $contador=$contador+1;
endwhile;
print_r($potencias);
?>