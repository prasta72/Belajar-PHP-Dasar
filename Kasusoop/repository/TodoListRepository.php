<?php 
namespace Repository;

require_once __DIR__ . "/../Config/database.php";

use Conect;
use Entity\Todolist;
use Config\Database;
use View\TodolistView;

interface TodoListRepository {

    public function save(Todolist $todolist):void;

    public function remove(int $number):bool;

    public function findAll();

    public function update(Todolist $todolist,int $number):void;

}

class TodoListRepositoryImpl implements TodoListRepository
{

    public array $todolist = array();
    private \PDO $conection;

    function __construct(\PDO $conection)
    {
        $this->conection = $conection;
        
    }

    public function save(Todolist $todolist):void
    {
        // $value = sizeof($this->todolist)+1;
    
        // $this->todolist[$value] = $todolist;
        $getdata = $todolist->getTodo();
        $sql = "INSERT INTO todolist(list) VALUES(?)";
        $staement = $this->conection->prepare($sql);
        $staement->execute(array($todolist->getTodo()));

    }

    public function update(Todolist $todolist,int $number):void
    {
        $this->todolist[$number] = $todolist;

    }

 
    public function remove(int $number):bool
    {
        
        // $panjang = sizeof($this->todolist);
        // if($number > $panjang){
        //     return false;
        // }
    
        // for($i = $number;$i < $panjang;$i++){
        //         $this->todolist[$i] = $this->todolist[$i + 1];
        // }
    
        // unset($this->todolist[$panjang]);

        // return true;
       $sql = "SELECT id FROM todolist WHERE id=?";
       $staement = $this->conection->prepare($sql);
       $staement->execute([$number]);

       if($staement->fetch()){
            $sql = "DELETE FROM todolist WHERE id= :id_todo";
            $result = $this->conection->prepare($sql);
            $result->bindParam("id_todo", $number);
            $result->execute();
            return true;
       }else{
           return false;
       }
    }

    public function findAll()
    {
       
        // $sql = "select * from todolist";
        // $result = $this->conection->query($sql);

        // return $result;
        // return $this->todolist;

        $sql = "SELECT id,list FROM todolist";
        $staement = $this->conection->prepare($sql);
        $staement->execute();

        $result = [];

        foreach($staement as $row){
            $todolist = new Todolist();
            $todolist->setId($row['id']);
            $todolist->SetTodo($row['list']);

            $result[] = $todolist;
            
        }
        return $result;
        

    }

    
}





?>