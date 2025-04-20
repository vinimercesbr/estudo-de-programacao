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
$lista_expoentes=range(0,$numero_expoente);
$lista_potencias=[];

//Processamento;

foreach ($lista_expoentes as $expoente) {
	$lista_potencias[$expoente]=$base**$expoente;
};

print_r($lista_potencias);
?>