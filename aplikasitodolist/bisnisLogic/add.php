<?php 

 function addTodoList(string $list){

    global $todolist;

    $value = sizeof($todolist)+1;
    
    $todolist[$value] = $list;
    
 }

?>