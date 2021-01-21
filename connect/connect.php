<?php
$servername = "localhost";
$username = "root";
$password ="";
$dbaname = "training";
try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbaname",$username,$password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo  $e->getMessage();
}