<script src="js/sweetalert.js"></script>
<?php

require_once 'connect.php';


if (isset($_POST['verification_code'])) {
  $verification_code = $_POST['verification_code'];

  $query = "SELECT * FROM checkforactive WHERE verification_code = :verification_code";
  $stmt = $conn->prepare($query);
  $stmt->bindParam(":verification_code", $verification_code);
  $stmt->execute();
  $result=$stmt->fetch(PDO::FETCH_ASSOC);

  if ($result) {
    $username = $result['username'];
    $password = $result['pwd'];
    $email = $result['email'];

    $query = "INSERT INTO users (username, pwd, email) VALUES (:username, :pwd, :email);";
    $stmt = $conn -> prepare($query);
    
    // $options = [
    //   'cost' => 12
    // ];
    // $hashed = password_hash($password, PASSWORD_BCRYPT, $options);
    //$hashed = sha1($password);
  
    $stmt -> bindParam(":username", $username);
    $stmt -> bindParam(":pwd", $password);
    $stmt -> bindParam(":email", $email);
    $stmt-> execute();
  
    // $query = "UPDATE users SET verification_code = 0 WHERE username = :username";
    // $stmt = $conn->prepare($query);
    // $stmt->bindParam(":username", $username);
    // $stmt->execute();
  
    // Display a success notification before redirecting
  ?>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        Swal.fire({
          icon: 'success',
          title: 'Verification Successful!',
          text: 'You have successfully verified your account. You will be redirected to the levels page.'
        }).then(() => {
          setTimeout(function() {
            window.location.href = 'levels.php';
          }, 100); 
        });
      });
    </script>
    <?php
    exit;
  } else {
    // Verification code is incorrect
  ?>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Verification code is incorrect. Please try again!'
        }).then(() => {
          setTimeout(function() {
            window.location.href = 'confirmation.php';
          }, 100);
        });
      });
    </script>
    <?php
  }
}
