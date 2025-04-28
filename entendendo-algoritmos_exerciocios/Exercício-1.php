<?php /*EXERCÍCIOS 1.1  que você tenha uma lista com 128 nomes e esteja fazendo uma pesquisa binária. Qual seria o número máximo de etapas que você levaria para encontrar o nome desejado?
1.2 Suponha que você duplique o tamanho da lista. Qual seria o número máximo de etapas agora?*/
?>
<?php
require_once 'vendor/autoload.php';

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();
// generate data by calling methods
echo $faker->name();
?>
