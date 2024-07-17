<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

//$username=$_POST["username"];
$current_password=$_POST['password'];
$email=$_POST['email'];



try{
    require_once "connect.php";
    require_once "change_email_mod.php";
    require_once "change_email_contr.php";
//error handlers

$errors=[];



if(is_input_empty($current_password,$email)){

$errors["empty_input"] = "Fill In All Fields!";

}

$result=get_user($conn,$current_password);


if(is_current_password_wrong($result)){

$errors["current_password_incorrect"]="Incorrect Info!";

}

if(!is_current_password_wrong($result) &&is_new_email_Notvalid($email)){

    $errors["new_email_incorrect"]="The New Selected Email Is Wrong!";

}


require_once 'php/config_session.inc.php';

if ($errors) {
    $_SESSION['errors_change_email']=$errors;
    header("Location:change_email.php");
    die();
}
else{

    update_email($conn,$email,$current_password);

}
// else{
// $data=array(

// ':username'=>$username

// );


// }



// $_SESSION["user_id"]=$result["user_ID"];
// $_SESSION["user_username"]= htmlspecialchars($result["username"]);

// $_SESSION["last_regeneration"]=time();

// session_start();
// session_regenerate_id();
// $user_session_id=session_id();
// $q="UPDATE users SET  user_session_id='".$user_session_id."' where id='".$result['id']."' ";
// $conn->query($q);
// $_SESSION['user_id']=$result['id'];
// $_SESSION['user_session_id']=$user_session_id;



header("Location:change_email.php?change_email=success");





$conn=null;
$stmt=null;
die();
}

catch(PDOException $e){
die("Query failed ");

}

}
else{

    header("location:logInUpdated.php");
    die();
}