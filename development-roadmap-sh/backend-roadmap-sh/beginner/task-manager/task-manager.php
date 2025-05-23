<?php
$tarefa=trim(fgets(STDIN));

$lista_tarefas = [
    "tarefa_1" => $tarefa
];

$json_lista_tarefas = json_encode($lista_tarefas, JSON_PRETTY_PRINT);
echo $json_lista_tarefas;
?>