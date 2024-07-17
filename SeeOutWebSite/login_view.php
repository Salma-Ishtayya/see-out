<?php

declare(strict_types=1);
?>
<script src ="js/sweetalert.js"></script>
<?php
require_once "connect.php";
require_once "login_mod.php";
require_once "login_contr.php";



function check_login_errors(){

if(isset($_SESSION['errors_login'])){
$errors=$_SESSION['errors_login'];
$error_message = implode('<br>', $errors);
unset($_SESSION['errors_login']);
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



else if(isset($_GET['login']) && $_GET['login'] ==="success"){
//  session_start();
//  session_regenerate_id();
//  $user_session_id=session_id();

//activate_user($conn,$username);


header("location:levels.php");

}


}



    