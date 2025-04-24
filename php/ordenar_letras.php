<?php
/*Você receberá uma lista de strings. Você deve classificá-lo em ordem alfabética (diferencia maiúsculas de minúsculas e com base nos valores ASCII dos caracteres) e, em seguida, retornar o primeiro valor.
O valor retornado deve ser uma cadeia de caracteres e ter entre cada uma de suas letras."***"
Você não deve remover ou adicionar elementos de/para a matriz.

Sáida:[A***p***p***l***e]*/
?>
<?php
/*require_once __DIR__ . '/vendor/autoload.php';

use Faker\Factory;

$faker = Factory::create();

echo $letras=($faker->name()); */
//Entradas de Dados
echo "Digite uma palavra: ";
$letras=trim(fgets(STDIN));
//Processamento
$lista_letras=str_split($letras);
$primeira_letra= $lista_letras[0];
/*if (ord($str) == 10) {
    echo "O primeiro caractere de \$str é uma nova linha.\n";
}*/
print_r($lista_letras);
echo (ord($primeira_letra));
?>
