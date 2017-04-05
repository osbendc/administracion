<?php
session_start();
if(!$_SESSION['logged']){
    header("Location: index.php");
    exit;
}else{
require '../db/database.php';
$database = new database();
$database->nuevaBD();
$database->archivar_ficha($_REQUEST['id'],1);
header( "Location:../archivados.php");
}
?>

