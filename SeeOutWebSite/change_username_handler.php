<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

//$username=$_POST["username"];
$password=$_POST['password'];
$new_username=$_POST['new_username'];



try{
    require_once "connect.php";
    require_once "change_username_mod.php";
    require_once "change_username_contr.php";
//error handlers

$errors=[];



if(is_input_empty($password,$new_username)){

$errors["empty_input"] = "Fill In All Fields!";

}

$result=get_user($conn,$password);


if(is_current_password_wrong($result)){

$errors["current_password_incorrect"]="Incorrect Info!";

}
if(! is_username_not_used($conn,$new_username)){

$errors['username_used']="The New Selected Username Is Used";

}



if( ! is_current_password_wrong($result) &&is_new_username_Notstrong($new_username)){

    $errors["current_username_incorrect"]="The New Selected Username Should Be At Least 5 Character And Not Longer Than 10 !";

}


require_once 'php/config_session.inc.php';

if ($errors) {
    $_SESSION['errors_change_username']=$errors;
    header("Location:change_username.php");
    die();
}
else{

    update_username($conn,$new_username,$password);

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



header("Location:change_username.php?change_username=success");





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