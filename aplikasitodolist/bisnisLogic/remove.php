<?php 
function removeTodoList(int $del){
    global $todolist;
    $panjang = sizeof($todolist);
    if($del > $panjang){
        return false;
    }

    for($i = $del;$i < $panjang;$i++){
            $todolist[$i] = $todolist[$i + 1];
    }

    unset($todolist[$panjang]);

}


?>