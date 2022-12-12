<?php 
$host = "localhost";
$user = "root";
$pass = "";
$dbname= "crud_php";


//CONEXÃO//
$conec = new PDO ("mysql:host=$host;dbname=".$dbname, $user, $pass);

?>