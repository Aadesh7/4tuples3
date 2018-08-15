<?php 
include 'dbconn.php';

if(!isset($_SESSION['count'])){
	$_SESSION['count'] = 0;
}else{
	$_SESSION['count'] = $_SESSION['count'] - 1;
}
$_SESSION['rcount'] = $_SESSION['rcount'] + 1; 
header('Location: test_redirect.php');
?>