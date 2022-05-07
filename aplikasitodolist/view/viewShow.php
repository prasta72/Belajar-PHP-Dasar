<?php
require_once '../model/todolist.php';
require_once '../bisnisLogic/show.php';
require_once '../helper/input.php';
require_once '../view/viewRemove.php';
require_once '../view/viewAdd.php';

function viewShow(){
    while(true){
        showTodoList();

        echo "Menu" . PHP_EOL;
        echo "1.Tambah Data" . PHP_EOL;
        echo "2.Hapus Data" . PHP_EOL;
        echo "3.keluar" . PHP_EOL;
    
        $result = input('Pilih menu');
    
        if($result == 1){
            viewadd();
        }else if($result == 2){
            viewRemove();
        }else{
            break;
        }
    }

    echo "keluar aplikasi";
   
    

}


?>