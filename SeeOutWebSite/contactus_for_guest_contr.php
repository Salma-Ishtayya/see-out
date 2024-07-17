<?php

declare(strict_types=1);


function is_input_empty(string $ttl,string $e_mail,$message){

if(empty($message) || empty($e_mail) || empty($ttl)){

    return true;
}
else{

    return false;
}

}


function is_email_invalid(string $email){

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

        return true;
    }
    else{
    
        return false;
    }


}


// function is_currentpass_wrong(bool|array $result){

// if(!$result){

// return true;

// }
// else{
//     return false;
// }

// }

// function is_newpasswords_dontmatch(string $n_pass, string $repass){

//     if($n_pass!=$repass){
    
//     return true;
    
//     }
//     else{

//         return false;
//     }
    
// }
// function is_newpasswords_strong(string $n_pass){
//     $pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/';
//     if (preg_match($pattern, $n_pass)) { 
//         return true; 
//     } else { 
//         return false; 
//     } 
  
// }
