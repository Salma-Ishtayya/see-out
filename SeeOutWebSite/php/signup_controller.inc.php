<?php // THIS ONE TO HANDLE THE ERRORS

declare (strict_types=1);
function is_input_empty (string $username, string $password, string $email) {
  if (empty($username) || empty($password) || empty($email) ){
    return true;
  } else {
      return false ;
  }
}

function is_email_invalid (string $email){
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    return true;
  } else {
      return false ;
  }
}

function is_username_taken (object $conn, string $username){
  if (get_username($conn ,  $username)){
    return true;
  } else {
      return false ;
  }
}

function is_email_registerd(object $conn, string $email){
  if (get_email($conn ,$email)){
    return true;
  } else {
      return false ;
  }
}

function is_username_invalid(string $username) {
  if (strlen($username) < 5 || strlen($username) > 10) {
    return true;
  } elseif (!preg_match('/^[a-zA-Z0-9]+$/', $username)) {
    return true;
  } else {
    return false;
  }
}

function is_password_invalid(string $password) {
  if (strlen($password) < 8 || strlen($password) > 32) {
    return true;
} elseif (strlen($password) >= 8 && preg_match('/[A-Z]/', $password) && preg_match('/[a-z]/', $password) && preg_match('/[0-9]/', $password) && preg_match('/[*_.]/', $password))
{
  return true ;
} else {
  return false ;
}
}




function create_user(object $conn, string $username, string $password, string $email) {
  set_user($conn, $username, $password, $email);
}