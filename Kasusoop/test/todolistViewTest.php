<?php 
require_once __DIR__ . "/../entity/TodoList.php";
require_once __DIR__ . "/../service/TodolistService.php";
require_once __DIR__ . "/../repository/TodoListRepository.php";
require_once __DIR__ . "/../view/TodolistView.php";
require_once __DIR__ . "/../helper/inputHelper.php";
require_once __DIR__ . "/../Config/database.php";

use Config\Database;
use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;
use View\TodolistView;



    $conection = Database::getConnection();
    $todolisRepo = new TodoListRepositoryImpl($conection);
    $todolistService = new TodoListServiceImpl($todolisRepo);
    $todolistView = new TodolistView($todolistService);
    $todolistView->showTodolis();





?>