<?php 

require_once "../model/todolist.php";
require_once "../bisnisLogic/show.php";
require_once __DIR__ . "/../bisnisLogic/add.php";
require_once __DIR__ . "/../helper/input.php";

$result = input("Add data");

addTodoList($result);

showTodoList();



?>