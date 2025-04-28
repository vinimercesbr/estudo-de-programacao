<?php
/*A fórmula matemática usada para determinar o índice do elemento do meio é:

  meio=(inicio+fim)/2
  
onde:

início é o índice do primeiro elemento da lista,

fim é o índice do último elemento da lista.

EXERCÍCIOS 1.1  que você tenha uma lista com 128 nomes e esteja fazendo uma pesquisa binária. Qual seria o número máximo de etapas que você levaria para encontrar o nome desejado?

1.2 Suponha que você duplique o tamanho da lista. Qual seria o número máximo de etapas agora?*/
?>
<?php
require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();

$lista_names=[];
$contador=0;
while($contador<128){
  $lista_names[$contador]=$faker->name();
  $contador=$contador+1; 
};

foreach($lista_names as $nome){
  echo $nome;
  echo "\n";
  echo $nome[0];
  echo "\n";
}
?>