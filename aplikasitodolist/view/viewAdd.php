<?php
require_once '../bisnisLogic/show.php';
require_once '../model/todolist.php';
require_once '../helper/input.php';
require_once '../bisnisLogic/add.php';

function viewAdd(){
    showTodoList();

    $value = input('masukan list');
    
    addTodoList($value);
} 


?>