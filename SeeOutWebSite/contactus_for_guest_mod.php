<?php

declare(strict_types=1);


function put_message(object $conn,string $email , string $msg){

    $queryy="INSERT INTO messages (user_msg,email) values (:msg,:email);";

    $statment=$conn->prepare($queryy);
    
    $statment->bindParam(":msg",$msg);
    
    $statment->bindParam(":email",$email);
    
    $statment->execute();



}
























// function get_user(object $conn ,string $cu_pass){

// $hashed=sha1($cu_pass);    

//  $query="SELECT * from users where pass ='".$hashed."'";

// $stmt=$conn->prepare($query);
// //$stmt->bindParam(":pa",$cu_pass);
// $stmt->execute();
// $result=$stmt->fetch(PDO::FETCH_ASSOC);

// return $result;
// }

// function activate_user(object $conn,string $username){

//     $q="UPDATE users SET in_page='1' where username = :username;";
//     $stmt=$conn->prepare($q);
//     $stmt->bindParam(":username",$username);
//     $stmt->execute();


// }
// function update_password(object $conn ,string $neww_pass,string $cu_pass){

//     $hashed=sha1($neww_pass);    
//     $hashed_cur=sha1($cu_pass);    
    
//      $query="UPDATE users set pass ='$hashed' where pass = '$hashed_cur' ";
    
//     $stmt=$conn->prepare($query);
//     $stmt->bindParam(":username",$username);
//     $stmt->execute();
//     return true;
//     }
    
    // function activate_user(object $conn,string $username){
    
    //     $q="UPDATE users SET in_page='1' where username = :username;";
    //     $stmt=$conn->prepare($q);
    //     $stmt->bindParam(":username",$username);
    //     $stmt->execute();
    
    
    // }