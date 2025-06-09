<?php
function check_file($file,$list_task){
  $check=file_exists($file);
    if($check==false){
      $list_task_json=json_encode($list_task, JSON_PRETTY_PRINT);
      file_put_contents($file,$list_task_json);
    return true;
    }else{
      
    }
}

function write_tasks_to_json_file($tasks){
  $file = 'list_task.json';
  print_r($tasks);
  check_file($file, $tasks);
}

function contador_geral($contador_tasks){
  static $contador=-1;
  while($contador<$contador_tasks){
    $contador=$contador+1;
    echo $contador;
    echo "\n";
  }
  return $contador;
}

function save_task_to_json($task){
  static $contador=0;
  $contador=contador_geral(90);
  echo $contador;
  //write_tasks_to_json_file($tasks);
}

function prompt_user_for_task(){
  echo "Enter your task: \n";
  $task = trim(fgets(STDIN));
  save_task_to_json($task);
}

prompt_user_for_task();
?>