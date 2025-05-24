<?php
 //$json_lista_tarefas = json_encode($lista_tarefas, JSON_PRETTY_PRINT);

class lista_tarefas{
    function criar_tarefa(){
      echo "Digite sua tarefa";
      $tarefa=trim(fgets(STDIN));
    }
    function criar_id(){
      $id=bin2hex(random_bytes(8));
    }
    function criar_json(){
      $file = 'lista_tarefas.json';
      $current = file_get_contents($file);
      $current .= "conteudo da tarefa";
      file_put_contents($file, $current);
    }
};

$json_lista_tarefas = new lista_tarefas;
$bar->criar_tarefa();

?>