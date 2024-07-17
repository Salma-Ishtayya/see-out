<?php

declare(strict_types=1);
?>
<script src ="js/sweetalert.js"></script>
<?php
require_once "connect.php";
require_once "contactus_for_guest_mod.php";
require_once "contactus_for_guest_contr.php";


//session_start();
function check_errors(){

if(isset($_SESSION['errors_sendmsg'])){
$errors=$_SESSION['errors_sendmsg'];
$error_message = implode('<br>', $errors);
unset($_SESSION['errors_sendmsg']);
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

else if(isset($_GET['msgsent']) && $_GET['msgsent'] ==="success"){
    ?>

    <script>
          document.addEventListener("DOMContentLoaded", function() {
            Swal.fire({
              icon: 'success',
              title: 'Email Sent Successfully !',
              text: 'The Email Sent Successfully'
            }).then(() => {
              setTimeout(function() {
                window.location.href = 'contactus_for_guest.php';
              }, 100); 
            });
          });
        </script>
        <?php

}


}



    