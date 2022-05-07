<?php 

$data_diri =[
    'nama' => 'I kadek Prasta Dwiutama',
    'umur' => '21',
    'jenis' => 'L',
    'status' => 'bujangan',
];

var_dump($data_diri);


foreach ($data_diri as $data => $value) {
    echo $data . " : " .  $value. PHP_EOL;
}










?>