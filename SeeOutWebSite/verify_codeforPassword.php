<script src ="js/sweetalert.js"></script>
<?php

require_once 'connect.php';

if (isset($_POST['forget_code'])) {
  $forget_code = $_POST['forget_code'];

  $query = "SELECT email FROM checkforforget WHERE forget_code = :forget_code";
  $stmt = $conn->prepare($query);
  $stmt->bindParam(":forget_code", $forget_code);
  $stmt->execute();
  $result = $stmt->fetch();

  if ($result) {
    header("Location: resetPass.php");
    exit();
  } else {
    // Verification code is incorrect
   ?>
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        Swal.fire({
          icon: 'error',
          title: 'Verification Code Is Not Correct !!',
          text: 'Please Try Again !'
        }).then(() => {
          setTimeout(function() {
            window.location.href = 'confirmationforReset.php';
          }, 100); 
        });
      });
    </script>
    <?php
  }
}

?>