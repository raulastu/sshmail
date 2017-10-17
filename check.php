<?php

// error_reporting(E_ALL);
// ini_set('display_errors', '1');


include_once 'DBUtils.php';
$row = getWholeRow("SELECT id, email, cmd from pendings");

// print_r($row);
// if($row!=null){

runQuery("DELETE FROM pendings WHERE `id`=".$row['id']);

header('Content-Type: application/json');

$data = json_encode($row);

echo $_GET['callback']."(".$data.");"; 

// }
// print_r($row);
// echo $row['id'];
