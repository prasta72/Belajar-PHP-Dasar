<?php 

namespace Service;

use Repository\TodoListRepository;
use Repository\TodoListRepositoryImpl;
use Entity\Todolist;

interface TodolistService
{
    public function showTodolist():void;

    public function addTodolist(string $todo):void;

    public function removeTodolist(int $number):void;

    public function updateTodolist(int $number,string $todo):void;
}

class TodoListServiceImpl implements TodolistService
{
    private TodoListRepository $todoListRepository;

    public function __construct(TodoListRepository $todoListRepository)
    {
        $this->todoListRepository = $todoListRepository;
    }
    public function showTodolist():void
    {
        $todolist = $this->todoListRepository->findAll();

        echo "TODOLIST" . PHP_EOL;

        // foreach($todolist as $row){

        //     echo $row['id'] . " " . $row['list'] . PHP_EOL;
        // }
    
        foreach($todolist as $number => $value){
    
            echo $value->getId() . " " . $value->getTodo() . PHP_EOL;
    
        }
        
    }

    public function addTodolist(string $todo):void
    {
        $todolist = new Todolist($todo);
        $this->todoListRepository->save($todolist);
        echo "sukses menambah todo list".PHP_EOL;
    }


    public function updateTodolist(int $number,string $todo):void
    {
        $todolist = new Todolist($todo);
        $this->todoListRepository->update($todolist,$number);
        echo "sukses mengedit" . PHP_EOL;
    }

    public function removeTodolist(int $number):void
    {
        if($this->todoListRepository->remove($number)){
            echo "sukses" . PHP_EOL;
        }else{
            echo "gagal" . PHP_EOL;
        }
    }
}


?>