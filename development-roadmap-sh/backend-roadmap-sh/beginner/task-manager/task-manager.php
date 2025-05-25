<?php
function create_json($list_task){
  $list_task=json_encode($list_task, JSON_PRETTY_PRINT);
  $file = 'list_task.json';
  $current = file_get_contents($file);
  $current .= $list_task;
  file_put_contents($file, $current);
};

function processing_task($task){
  $list_task= array("task"=>$task);
  create_json($list_task);
};

function create_task(){
  echo "Enter your task: \n";
  $task=trim(fgets(STDIN));
  processing_task($task);
};

create_task();
?>