<?php

declare(strict_types=1);
?>
<script src ="js/sweetalert.js"></script>
<?php
require_once "connect.php";
require_once "change_email_mod.php";
require_once "change_email_contr.php";


//session_start();
function check_change_email_errors(){
if(isset($_SESSION['errors_change_email'])){
$errors=$_SESSION['errors_change_email'];
$error_message = implode('<br>', $errors);
unset($_SESSION['errors_change_email']);
?>
    <script>
      Swal.fire({
        title: 'Error',
        html: '<?php echo $error_message;?>',
        icon: 'error',
        confirmButtonText: 'OK'
      });
    </script>
<?php

}

else if(isset($_GET['change_email']) && $_GET['change_email'] ==="success"){
//  session_start();
//  session_regenerate_id();
//  $user_session_id=session_id();
//activate_user($conn,$username);
?>

<script>
      document.addEventListener("DOMContentLoaded", function() {
        Swal.fire({
          icon: 'success',
          title: 'Email Changed Successfully !',
          text: 'You Have Successfully Changed Your Email.'
        }).then(() => {
          setTimeout(function() {
            window.location.href = 'settings.html';
          }, 100); 
        });
      });
    </script>
    <?php

//header("location:Home.php");

}


}



    