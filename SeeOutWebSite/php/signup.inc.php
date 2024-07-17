<?php //THIS ONE IS THE SIGNUP SYSTEM

if ($_SERVER["REQUEST_METHOD"] === "POST"){
  $username = $_POST["username"];
  $password = $_POST["pwd"];
  $email = $_POST["email"];
  $confirmpwd = $_POST["confirmpwd"];

  try {
    require_once 'connect.php';
    require_once 'signup_model.inc.php';
    require_once 'signup_controller.inc.php';

    //ERRORS
    $errors = [];


    if (is_input_empty ($username, $password, $email)) {
      $errors ["empty_input"] = "Fill In All Fields";
    }
    if (is_email_invalid ($email)) {
      $errors ["invalid_email"] = "Invaild Email !";
    }
    if (is_username_taken ($conn, $username)) {
      $errors ["username_taken"] = "Username Already Taken !";
    }
    if (get_email($conn, $email)) {
      $errors ["email_taken"] = "Email Already Taken !";
    }
    if ($password !== $confirmpwd) {
      $errors ["pwd_nomatch"] = "Passwords Doesn't Match !";
    }
    if (is_username_invalid($username)) {
      $errors ["username_invalid"] = "Invalid Username !";
    }
    if (is_password_invalid($password)) {
      $errors ["pwd_invalid"] = "Invalid Password !";
    }

    require_once 'config_session.inc.php';

    if ($errors) {
      $_SESSION["errors_signup"] = $errors;
      $signupdata = [
        "username" => $username, 
        "email" => $email
      ];
      $_SESSION["signup_data"] = $signupdata;
      header("Location: ../signUpUpdated.php");
      die();
    }

    create_user($conn, $username, $password, $email);
    header("Location: ../confirmation.php");
    $conn = null;
    $stmt = null;
    die();




  } catch (PDOException $e)  {
    die("Query Failed : ". $e->getMessage());
  }


}else {
  header("Location: ../Home.html");
  die();
}