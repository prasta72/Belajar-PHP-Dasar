<?php 

namespace Entity;

class Todolist {
    private string $todo;
    private int $id;


    public function __construct(string $todo ="")
    {
        $this->todo = $todo;
    }


    public function getTodo():string 
    {
        return $this->todo;
    }

    public function SetTodo(string $todo):void 
    {
        $this->todo = $todo;
    }

    public function getId():int
    {
        return $this->id;
    }

    public function SetId(string $id):void 
    {
        $this->todo = $id;
    }
}




?>