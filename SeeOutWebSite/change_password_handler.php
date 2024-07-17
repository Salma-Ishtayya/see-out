<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

//$username=$_POST["username"];
$cur_pass=$_POST["current_pass"];
$new_pass=$_POST["newpass"];
$re_pass=$_POST["confirmpass"];



try{
    require_once "connect.php";
    require_once "changepass_mod.php";
    require_once "changepass_contr.php";
//error handlers

$errors=[];



if(is_input_empty($cur_pass,$new_pass,$re_pass)){

$errors["empty_input"] = "Fill In All Fields!";

}

$result=get_user($conn,$cur_pass);


if(is_currentpass_wrong($result)){

$errors["currentpass_incorrect"]="Incorrect Info!";

}
if(!is_currentpass_wrong($result) &&is_newpasswords_dontmatch($new_pass,$re_pass)){

    $errors["currentpass_incorrect"]="Passwords Dont Match!";

}
if(!is_newpasswords_strong($new_pass)){

    $errors["newpass_not_strong"]="Password Should Contain At Least 8 Characters And One Uppercase Letter And One Lowercase Character And One Special Character";

}

require_once 'php/config_session.inc.php';

if ($errors) {
    $_SESSION['errors_changepass']=$errors;
    header("Location:change_password.php");
    die();
}
else{

    update_password($conn,$new_pass,$cur_pass);
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



header("Location:change_password.php?changepass=success");





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