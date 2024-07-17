<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
$username=$_POST["username"];
$password=$_POST["password"];
//$hashed_password=sha1($password);

try{
require_once "connect.php";
require_once "login_mod.php";
require_once "login_contr.php";

//error handlers

$errors=[];

if(is_input_empty($username,$password)){

$errors["empty_input"] = "Fill In All Fields!";

}

$result=get_user($conn,$username);


if(is_username_wrong($result)){

$errors["login_incorrect"]="Incorrect Login Info!";

}
if(!is_username_wrong($result) && is_password_wrong($password,$result['pwd'],$result)){

    $errors["login_incorrect"]="Incorrect Password Info!";

}

require_once 'session_time.php';

if ($errors) {
    $_SESSION['errors_login']=$errors;
    
    header("Location:logInUpdated.php");
    die();
}
else{
$data=array(

':username'=>$username

);


}



$_SESSION["user_id"]=$result["user_ID"];
$_SESSION["user_username"]= htmlspecialchars($result["username"]);

$_SESSION["last_regeneration"]=time();

session_start();
session_regenerate_id();
$user_session_id=session_id();
// $q="UPDATE users SET  user_session_id='".$user_session_id."' where id='".$result['id']."' ";
// $conn->query($q);
// $_SESSION['user_id']=$result['id'];
// $_SESSION['user_session_id']=$user_session_id;



header("Location:logInUpdated.php?login=success");





$conn=null;
$stmt=null;
die();
}

catch(PDOException $e){
die("Query failed ". e->getMessage());

}

}
else{

    header("location:logInUpdated.php");
    die();
}
