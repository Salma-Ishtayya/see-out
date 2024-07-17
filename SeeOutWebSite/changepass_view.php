<?php

declare(strict_types=1);
?>
<script src ="js/sweetalert.js"></script>
<?php
require_once "connect.php";
require_once "changepass_mod.php";
require_once "changepass_contr.php";


//session_start();
function check_changepass_errors(){

if(isset($_SESSION['errors_changepass'])){
$errors=$_SESSION['errors_changepass'];
$error_message = implode('<br>', $errors);
unset($_SESSION['errors_changepass']);
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

else if(isset($_GET['changepass']) && $_GET['changepass'] ==="success"){
//  session_start();
//  session_regenerate_id();
//  $user_session_id=session_id();
//activate_user($conn,$username);


?>

<script>
      document.addEventListener("DOMContentLoaded", function() {
        Swal.fire({
          icon: 'success',
          title: 'Password Changed Successfully !',
          text: 'You Have Successfully Changed Your Password.'
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



    