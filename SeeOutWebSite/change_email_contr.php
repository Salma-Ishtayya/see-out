<?php

declare(strict_types=1);


function is_input_empty(string $current_password,string $email){

if(empty($current_password) || empty($email) ){

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


    

function is_new_email_Notvalid(string $email){
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

        return true;
    }
    else{
    
        return false;
    }
  
}
