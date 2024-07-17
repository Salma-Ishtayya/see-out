<?php 
//THIS ONE TO CONNCET TO THE DATABASE
//Everything Correct

$host = 'localhost';
$dbname = 'seeoutproject';
$dbusername = 'root';
$dbpassword = '';

try {
  $conn = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e)  {
  die("Connection to DataBase Failed :". $e->getMessage());
}