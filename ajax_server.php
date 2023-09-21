<?php
$gods = array();
$gods[] = "Krishna";
$gods[] = "Kshiva";
$gods[] = "Shiva";
$gods[] = "Bramha";
$gods[] = "Ram";

$searchString = strtolower($_GET['search']);

$hint = "";
$len = strlen($searchString);
if($len == 0){
$hint = "";
exit(0);
}
foreach($gods as $god){
if($searchString == strtolower(substr($god, 0, $len))){
$hint= $hint.$god.' ,';
}
}
print_r($hint);


?>