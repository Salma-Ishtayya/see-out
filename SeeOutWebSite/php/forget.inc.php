<?php
if ($_SERVER["REQUEST_METHOD"] === "POST"){
  $email = $_POST["email"];


  try {
    require_once '../connect.php';
    require_once 'forget_model.inc.php';
    require_once 'forget_controller.inc.php';

    if (is_input_empty ($email)) {
      $errors ["empty_input"] = "Fill In All Fields";
    }

    if ($errors) {
      $_SESSION["errors_forget"] = $errors;
      $signupdata = [
        "email" => $email
      ];
      $_SESSION["forget_data"] = $signupdata;
      header("Location: ../forgetPassEmail.php");
      die();
    }

  } catch (PDOException $e)  {
    die("Query Failed : ". $e->getMessage());}
  }
  else {
    header("Location: ../Home.html");
    die();
  }
require_once 'forget_model.inc.php';

forget_password($conn, $email);
    header("location: ../confirmationforReset.php");
    die();