<?php

declare(strict_types=1);


function get_user(object $conn ,string $current_password){

   $pass=$current_password;

 $query="SELECT * from users where pwd =:pass";

$stmt=$conn->prepare($query);
$stmt->bindParam(":pass",$pass);
$stmt->execute();
$result=$stmt->fetch(PDO::FETCH_ASSOC);

return $result;
}

// function activate_user(object $conn,string $username){

//     $q="UPDATE users SET in_page='1' where username = :username;";
//     $stmt=$conn->prepare($q);
//     $stmt->bindParam(":username",$username);
//     $stmt->execute();


// }
function update_email(object $conn ,string $email,string $current_password){
    
    
    $pass=$current_password;
    $query="UPDATE users set email ='$email' where pwd = '$pass' ";
    
    $stmt=$conn->prepare($query);
    //$stmt->bindParam(":username",$username);
    $stmt->execute();
    //return true;
    }
    
    // function activate_user(object $conn,string $username){
    
    //     $q="UPDATE users SET in_page='1' where username = :username;";
    //     $stmt=$conn->prepare($q);
    //     $stmt->bindParam(":username",$username);
    //     $stmt->execute();
    
    
    // }