<?php
function check_file($file,$list_task){
  $check=file_exists($file);
  foreach ($list_task as $index_list_task){
    if($check==false){
      file_put_contents($file,$index_list_task);
      $list_task_json=json_encode($index_list_task, JSON_PRETTY_PRINT);
    }else{
      $list_task_json=json_decode($index_list_task, JSON_PRETTY_PRINT);
      $current = file_get_contents($file);
      $current .=$index_list_task;
      file_put_contents($file, $current);
      $list_task_json=json_encode($list_task_json, JSON_PRETTY_PRINT);
    };
  };
};
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