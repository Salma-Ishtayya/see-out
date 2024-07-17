<?php //THIS ONE FOR REACHING THE DATABASE AND THE DATA

declare (strict_types=1);

// check if user name is not in the database
function get_username(object $conn, string $username){
  $query = "SELECT username From users WHERE username =:username;";
  $stmt = $conn -> prepare($query);
  $stmt -> bindParam(":username", $username);
  $stmt-> execute();

  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  return $result ;

}

// check if email is not in the database
function get_email(object  $conn , string $email){
  $query = "SELECT username From users WHERE email =:email;";
  $stmt = $conn -> prepare($query);
  $stmt -> bindParam(":email", $email);
  $stmt-> execute();

  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  return $result ;
}

//create user
function set_user(object $conn, string $username, string $password, string $email) {
  
  $verification_code = rand (100000,999999);
  $query = "INSERT INTO checkforactive (username, pwd, email, verification_code) VALUES (:username, :pwd, :email, :verification_code);";
  $stmt = $conn -> prepare($query);
  
  $options = [
    'cost' => 12
  ];
  // $hashedpwd = password_hash($password, PASSWORD_BCRYPT, $options);
  $hashed = sha1($password);

  $stmt -> bindParam(":username", $username);
  $stmt -> bindParam(":pwd", $hashed);
  $stmt -> bindParam(":email", $email);
  $stmt -> bindParam(":verification_code", $verification_code);
  $stmt-> execute();

  $mail = require __DIR__ . "/mailer.php";

  $mail->setFrom("beebofuad999@gmail.com");
  $mail->addAddress($_POST["email"]);
  $mail->Subject = "Account Activation";
  $mail->Body = <<<END
  <h1>Thanks For Register On SeeOut Website ! </h1>
  <br>
  <h2>There Is Your Verification Code : $verification_code </h2>

  END;

  try {

      $mail->send();

  } catch (Exception $e) {

    echo "Message could not be sent. Mailer error: {$mail->ErrorInfo}";
    exit;

    }


}


