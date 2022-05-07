<?php

use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;

require_once __DIR__ . "/../entity/TodoList.php";
require_once __DIR__ . "/../service/TodolistService.php";
require_once __DIR__ . "/../repository/TodoListRepository.php";


function showTodolist()
{
    $todolistRepository = new TodoListRepositoryImpl;
    $todolistRepository->todolist[1] = "belajar php dasar";
    $todolistRepository->todolist[2] = " OOP PHP";
    $todolistService = new TodoListServiceImpl($todolistRepository);
    $todolistService->showTodolist();
}

function testAddTodolist()
{
    $todolistRepository = new TodoListRepositoryImpl;
    $todolistService = new TodoListServiceImpl($todolistRepository);
    $todolistService->addTodolist("belajar php");
    $todolistService->addTodolist("belajar php oop");
    $todolistService->addTodolist("belajar php database");

    $todolistService->showTodolist();
}


function testRemoveTodolist()
{
    $todolistRepository = new TodoListRepositoryImpl;
    $todolistService = new TodoListServiceImpl($todolistRepository);
    $todolistService->addTodolist("belajar php");
    $todolistService->addTodolist("belajar php oop");
    $todolistService->addTodolist("belajar php database");

    $todolistService->showTodolist();
    $todolistService->removeTodolist(1);
    $todolistService->showTodolist();

}

function testUpdateTodolist()
{
    $todolistRepository = new TodoListRepositoryImpl;
    $todolistService = new TodoListServiceImpl($todolistRepository);
    $todolistService->addTodolist("belajar php");
    $todolistService->addTodolist("belajar php oop");
    $todolistService->addTodolist("belajar php database");

    $todolistService->showTodolist();
    $todolistService->updateTodolist(2,"belajar memasak");
    $todolistService->showTodolist();

}


testUpdateTodolist();


?>