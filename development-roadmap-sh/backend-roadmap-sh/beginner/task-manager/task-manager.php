<?php
function criar_json($lista_tarefas){
  $file = 'lista_tarefas.json';
  $current = file_get_contents($file);
  $current .= $lista_tarefas;
  file_put_contents($file, $current);
};

function processamento_tarefas($tarefa,$nome_tarefa){

  $lista_tarefas=array($nome_tarefa=>$tarefa);
  $lista_tarefas=json_encode($lista_tarefas, JSON_PRETTY_PRINT);
  criar_json($lista_tarefas);
};

function criar_tarefa(){
  echo "Digite o nome da tarefa: \n";
  $nome_tarefa=trim(fgets(STDIN));
  echo "Digite sua tarefa: \n";
  $tarefa=trim(fgets(STDIN));
  processamento_tarefas($tarefa,$nome_tarefa);
};
/*function criar_id(){
  $id=bin2hex(random_bytes(8));
};*/
criar_tarefa();
?>