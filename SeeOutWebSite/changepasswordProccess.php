<script src ="js/sweetalert.js"></script>
<?php
require_once 'connect.php';

// Initialize an empty array to store error messages
$errors = [];

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the username and new password from the form
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $new_password = filter_var($_POST['newpassword'], FILTER_SANITIZE_STRING);
    $confirm_password = filter_var($_POST['confirmpassword'], FILTER_SANITIZE_STRING);

    // Check if the username is empty
    if (empty($username)) {
        $errors[] = 'Username is required';
    }

    // Check if the new password and confirmation password match
    if ($new_password!== $confirm_password) {
        $errors[] = 'The new password and confirmation password do not match';
    }

    // Check password strength
    if (strlen($new_password) < 8 || strlen($new_password) > 32 &&!preg_match('/[A-Z]/', $new_password) &&!preg_match('/[a-z]/', $new_password) &&!preg_match('/[0-9]/', $new_password) &&!preg_match('/[*_.]/', $new_password) ) {
        $errors[] = 'The new password must be between 8 and 32 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character';
    }

    // If there are errors, display them using SweetAlert 2
    if (!empty($errors)) {
        echo "<script>
            document.addEventListener(\"DOMContentLoaded\", function() {
              Swal.fire({
                icon: \"error\",
                title: \"Something Wrong !!\",
                text: \"". implode('<br>', $errors) . "\"
              }).then(() => {
                setTimeout(function() {
                  window.location.href = \"resetPass.php\";
                }, 100); 
              });
            });
          </script>";
        exit;
        
    }

    // Retrieve the user's record from the database
    $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $user = $stmt->fetch();

    // Hash the new password
    $pwd = $new_password; 

    // Update the user's password hash in the database
    $stmt = $conn->prepare("UPDATE users SET pwd = :hashedpwd WHERE username = :username");
    $stmt->bindParam(':hashedpwd', $new_password);
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    // Display a success message
    echo ' <script>
    document.addEventListener("DOMContentLoaded", function() {
      Swal.fire({
        icon: "success",
        title: "Password Changed Successfully !!",
        text: "You have successfully Changed your Password. You will be redirected to the Login page."
      }).then(() => {
        setTimeout(function() {
          window.location.href = "loginUpdated.php";
        }, 100); 
      });
    });
  </script>';
}
// } else {
//     echo ' <script>
//     document.addEventListener("DOMContentLoaded", function() {
//       Swal.fire({
//         icon: "erros",
//         title: "Something Wrong !!",
//         text: "You have successfully verified your account. You will be redirected to the levels page."
//       }).then(() => {
//         setTimeout(function() {
//           window.location.href = "resetPass.php";
//         }, 100); 
//       });
//     });
//   </script>';
//     // header("location : changepasswordProccess.php"); 
// }