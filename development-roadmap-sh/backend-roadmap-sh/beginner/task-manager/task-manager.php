<?php
function check_file($file,$list_task){
  $check=file_exists($file);
    if($check==false){
      $list_task_json=json_encode($list_task, JSON_PRETTY_PRINT);
      file_put_contents($file,$list_task_json);
    return true;
    }else{
      foreach ($list_task as $index){
        print_r($index);
      }
    }
}

function write_tasks_to_json_file($tasks){
  $file = 'list_task.json';
  check_file($file, $tasks);
}

function save_task_to_json($task){
  $tasks = array($task);
  write_tasks_to_json_file($tasks);
}

function prompt_user_for_task(){
  echo "Enter your task: \n";
  $task = trim(fgets(STDIN));
  save_task_to_json($task);
}

prompt_user_for_task();
?>