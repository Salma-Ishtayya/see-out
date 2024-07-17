<?php

declare(strict_types=1);
?>
<script src ="js/sweetalert.js"></script>
<?php
require_once "connect.php";
require_once "change_username_mod.php";
require_once "change_username_contr.php";


//session_start();
function check_change_username_errors(){
if(isset($_SESSION['errors_change_username'])){
$errors=$_SESSION['errors_change_username'];
$error_message = implode('<br>', $errors);
unset($_SESSION['errors_change_username']);
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

else if(isset($_GET['change_username']) && $_GET['change_username'] ==="success"){
    ?>

    <script>
          document.addEventListener("DOMContentLoaded", function() {
            Swal.fire({
              icon: 'success',
              title: 'Username Changed Successfully !',
              text: 'You Have Successfully Changed Your Username.'
            }).then(() => {
              setTimeout(function() {
                window.location.href = 'settings.html';
              }, 100); 
            });
          });
        </script>
        <?php
}


}



    