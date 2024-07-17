<?php

declare(strict_types=1);


function get_user(object $conn ,string $cu_pass){

$pass=$cu_pass;    

 $query="SELECT * from users where pwd ='".$pass."'";

$stmt=$conn->prepare($query);
//$stmt->bindParam(":pa",$cu_pass);
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
function update_password(object $conn ,string $neww_pass,string $cu_pass){

    $newpass=$neww_pass;    
    $curpass=$cu_pass;    
    
     $query="UPDATE users set pwd ='$newpass' where pwd = '$curpass' ";
    
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