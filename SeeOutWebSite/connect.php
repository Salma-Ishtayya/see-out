<?php

$dsn="mysql:host=localhost;dbname=seeoutproject";
$user='root';
$pass='';

try{

    $conn=new PDO($dsn,$user,$pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 
}
catch(PDOException $e){

   die("connection failed". $e->getMessage());
}
