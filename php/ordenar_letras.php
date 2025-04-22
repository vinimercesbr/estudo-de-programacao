<?php
/*Você receberá uma lista de strings. Você deve classificá-lo em ordem alfabética (diferencia maiúsculas de minúsculas e com base nos valores ASCII dos caracteres) e, em seguida, retornar o primeiro valor.
O valor retornado deve ser uma cadeia de caracteres e ter entre cada uma de suas letras."***"
Você não deve remover ou adicionar elementos de/para a matriz.

Sáida:[A***p***p***l***e]*/
?>
<?php
require_once __DIR__ . '/vendor/autoload.php';

use Faker\Factory;

$faker = Factory::create();

echo $letras=($faker->name());
$lista_letras=str_split(strtoupper($letras));

print_r($lista_letras);
?>
