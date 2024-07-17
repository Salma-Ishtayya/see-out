<?php

function forget_password(object $conn, string $email) {
$email = $_POST["email"];
$forget_code = rand (100000,999999);
$query = "INSERT INTO checkforforget  (email, forget_code) VALUES (:email, :forget_code)";
$stmt = $conn -> prepare($query);
$stmt -> bindParam(":email", $email);
$stmt -> bindParam(":forget_code", $forget_code);
$stmt-> execute();


$mail = require __DIR__ . "/mailer.php";
  $mail->setFrom("beebofuad999@gmail.com");
  $mail->addAddress($_POST["email"]);
  $mail->Subject = "Password Recovery";
  $mail->Body = <<<END
  <h1>Thanks For Reaching Out SeeOut Website ! </h1>
  <br>
  <h2>There Is Your Verification Code To Change Your Password : $forget_code </h2>

  END;

  try {

      $mail->send();

  } catch (Exception $e) {

    echo "Message could not be sent. Mailer error: {$mail->ErrorInfo}";
    exit;

    }
  }

  function get_email(object  $conn , string $email){
    $query = "SELECT username From users WHERE email =:email;";
    $stmt = $conn -> prepare($query);
    $stmt -> bindParam(":email", $email);
    $stmt-> execute();
  
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result ;
  }

  
