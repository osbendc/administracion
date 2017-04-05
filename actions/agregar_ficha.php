<?php
session_start();
if(!$_SESSION['logged']){
    header("Location: index.php");
    exit;
}else{
require '../db/database.php';
$database = new database();
$database->nuevaBD();
$database->guardar_ficha($_POST['d1'],$_POST['d2'],$_POST['d4'],$_POST['d7']);
header( "Location:../app.php");
}
?>

