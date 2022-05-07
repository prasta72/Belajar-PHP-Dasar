<?php 


namespace View;




use Service\TodolistService;
use helper\InputHelper;

class TodolistView
{
    private TodolistService $todolistservice;

    public function __construct(TodolistService $todolistservice)
    {
        $this->todolistservice = $todolistservice;
        
    }
    public function showTodolis():void
    {
            while(true){
                $this->todolistservice->showTodolist();
        
                echo "Menu" . PHP_EOL;
                echo "1.Tambah Data" . PHP_EOL;
                echo "2.Hapus Data" . PHP_EOL;
                echo "3.Update" . PHP_EOL;
                echo "4.keluar" . PHP_EOL;
            
                $result = InputHelper::input("pilih");
            
                if($result == 1){
                   $this->addTodolis();
                }else if($result == 2){
                    $this->removeTodolis();
                }else if($result == 3){
                    $this->updateTodolist();
                }
                else{
                    break;
                }
        
            echo "keluar aplikasi" . PHP_EOL;
           
        }

    }
    public function addTodolis():void
    {
        $this->todolistservice->showTodolist();

        $value = InputHelper::input('masukan list');
        
        $this->todolistservice->addTodoList($value);
    }
    public function removeTodolis():void
    {
        $result = InputHelper::input('masukan nomor index');
        $this->todolistservice->removeTodoList($result);
    }


    public function updateTodolist():void 
    {
        $result = InputHelper::input("masukan nomor index ");
        $resultdua = InputHelper::input("masukan list baru ");
        $this->todolistservice->updateTodolist($result,$resultdua);

    }
}





?>