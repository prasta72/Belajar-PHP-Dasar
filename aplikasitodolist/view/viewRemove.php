<?php
require_once '../bisnisLogic/remove.php';
require_once '../helper/input.php';
require_once '../bisnisLogic/remove.php';
require_once '../bisnisLogic/show.php';


function viewRemove(){

    $result = input('masukan nomor index');
    removeTodoList($result);
}

?>