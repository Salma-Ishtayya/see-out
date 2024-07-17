<?php // THIS ONE TO HANDLE THE ERRORS

declare (strict_types=1);

function is_email_registerd(object $conn, string $email){
  if (get_email($conn ,$email)){
    return true;
  } else {
      return false ;
  }
}
function is_input_empty (string $email) {
  if (empty($email) ){
    return true;
  } else {
      return false ;
  }
}