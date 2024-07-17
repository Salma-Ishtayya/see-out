<?php

declare(strict_types=1);


function get_user(object $conn ,string $username){

$query="SELECT * from users where username = :username;";
$stmt=$conn->prepare($query);
$stmt->bindParam(":username",$username);
$stmt->execute();
$result=$stmt->fetch(PDO::FETCH_ASSOC);
//$rcount=$stmt->rowCount();
// if($rcount>0){
//     session_start();
//     session_regenerate_id();
//     $user_session_id=session_id();
//     $q="UPDATE users SET  user_session_id='".$user_session_id."' where id='".$result['id']."' ";
//     $conn->query($q);
//     $_SESSION['user_id']=$result['id'];
//     $_SESSION['user_session_id']=$user_session_id;


// }

return $result;
}

// function activate_user(object $conn,string $username){

//     $q="UPDATE users SET in_page='1' where username = :username;";
//     $stmt=$conn->prepare($q);
//     $stmt->bindParam(":username",$username);
//     $stmt->execute();


// }
