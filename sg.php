<?php
print_r($_POST);

if(isset($_POST['from']) &&
 isset($_POST['subject']) && $_POST['to'] == 'terminal@si.ht'){
	$email = $_POST['from'];
	$cmd = $_POST['subject'];

	include_once 'DBUtils.php';
	$sql = "INSERT INTO pendings (email, cmd) VALUES ('".$email."','".$cmd."')";
	runQuery($sql);
	echo 'saved in pendings';
}

// if(isset($_GET['from']) &&
//  isset($_GET['subject'])){
// 	$email = $_GET['from'];
// 	$cmd = $_GET['subject'];

// 	include_once 'DBUtils.php';
// 	$sql = "INSERT INTO pendings (email, cmd) VALUES ('".$email."','".$cmd."')";
// 	runQuery($sql);
// 	echo 'saved in pendings';
// }