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

function create_json($list_task){
  $file = 'list_task.json';
  check_file($file,$list_task);
};

function processing_task($task){
  $list_task= array($task);
  create_json($list_task);
};

function create_task(){
  echo "Enter your task: \n";
  $task=trim(fgets(STDIN));
  processing_task($task);
};

create_task();
?>