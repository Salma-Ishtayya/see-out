<script src ="../js/sweetalert.js"></script>
<?php
function check_forget_errors(){
  if (isset($_SESSION["errors_forget"])) {
    $errors = $_SESSION['errors_forget'];
    $error_message = implode('<br>', $errors);
    unset($_SESSION['errors_forget']);
?>
    <script>
      Swal.fire({
        title: 'Error',
        html: '<?php echo $error_message;?>',
        icon: 'error',
        background: "#000 ",
        confirmButtonText: 'OK'
      });
    </script>
<?php
  }
}