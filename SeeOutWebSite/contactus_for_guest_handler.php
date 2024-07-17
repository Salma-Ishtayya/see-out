<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){

//$username=$_POST["username"];
$title=$_POST["MessageTitle"];
$email=$_POST["email"];
$message=$_POST["Message"];



try{
    require_once "connect.php";
    require_once "contactus_for_guest_mod.php";
    require_once "contactus_for_guest_contr.php";
//error handlers

$errors=[];



if(is_input_empty($title,$email,$message)){

$errors["empty_input"] = "Fill In All Fields!";

}

//$result=get_user($conn,$email);

if(is_email_invalid($email)){

    $errors["invalid_email"] = "Email Is Wrong And Not Active!";



}

// if(!is_currentpass_wrong($result) &&is_newpasswords_dontmatch($new_pass,$re_pass)){

//     $errors["currentpass_incorrect"]="paswords dont match!";

// }
// if(!is_newpasswords_strong($new_pass)){

//     $errors["newpass_not_strong"]="password should contain at least 8 characters and one uppercase letter and one lowercase character and one special character";

// }

require_once 'php/config_session.inc.php';

if ($errors) {
    $_SESSION['errors_sendmsg']=$errors;
    header("Location:contactus_for_guest.php");
    die();
}
else{

    put_message($conn, $email , $message);
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



header("Location:contactus_for_guest.php?msgsent=success");





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