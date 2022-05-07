<?php 

$matches = [];
$matchesdua = [];

$result = preg_match_all("/eko|awan|edi/i", "eko awan kanedi" ,$matches);

$resultdua = preg_replace("/anjing|bangsat|kontol/i","****","dasar lo kontol anjing dan juga bangsat kontol melesat keudara");

$resulttiga = preg_replace("/[\s,-]/","eko kurniawan anedy keren-----",$matches);
var_dump($result);
var_dump($resultdua);
var_dump($resulttiga);


?>