<?php
/*
Conceito:

    A pesquisa binária é um algoritmo eficiente utilizado para encontrar um elemento em uma lista ordenada. Ele funciona dividindo repetidamente a lista ao meio, comparando o elemento buscado com o valor do meio da lista. Se o elemento estiver presente, a pesquisa retorna sua posição; caso contrário, retorna None. Este método é conhecido por sua eficiência, utilizando a técnica de "dividir e conquistar" para reduzir o número de comparações necessárias.

Fórmula matemática:
    Se usa para determinar o índice do elemento do meio é:
    
        meio=(inicio+fim)/2
  
    onde:

        início é o índice do primeiro elemento da lista,

        fim é o índice do último elemento da lista.

EXERCÍCIOS:
    1.1  que você tenha uma lista com 128 nomes e esteja fazendo uma pesquisa binária. Qual seria o número máximo de etapas que você levaria para encontrar o nome desejado?

    1.2 Suponha que você duplique o tamanho da lista. Qual seria o número máximo de etapas agora?*/
?>
<?php
require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();

$lista_names=[];
$contador=0;
$meio=0;
$inicio=0;
$fim=127;

while($contador<128){
    $lista_names[$contador]=$faker->name();
    $contador=$contador+1; 
};

sort($lista_names);
print_r(($lista_names));
?>