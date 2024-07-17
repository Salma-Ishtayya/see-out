<?php

declare(strict_types=1);


function is_input_empty(string $password,string $new_username){

if(empty($password) || empty($new_username) ){

    return true;
}
else{

    return false;
}

}


function is_current_password_wrong(bool|array $result){

if(!$result){

return true;

}
else{
    return false;
}

}

function is_username_not_used(object $conn,string $new_username){

    $query="SELECT * from users where username =:username";

    $stmt=$conn->prepare($query);
    $stmt->bindParam(":username",$new_username);
    $stmt->execute();
    $result=$stmt->fetch(PDO::FETCH_ASSOC);
    if($result){

        return false;
    }
    else{

        return true;
    }


}
    

function is_new_username_Notstrong(string $new_username){
    
    if(strlen($new_username)<5  || strlen($new_username) > 10 ){

        return true;
    }
    else{

        return false;
    }
  
}
