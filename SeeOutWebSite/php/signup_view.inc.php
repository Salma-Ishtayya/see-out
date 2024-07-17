<?php

declare (strict_types=1);

function signup_input() {

  if (isset($_SESSION["signup_data"]["username"]) && !isset($_SESSION["errors_signup"]["username_taken"])) {
    echo '<div class="form-group">
    <input 
        name="username"
        type="text" 
        autofocus 
        maxlength="10" 
        class="input-f" 
        id="username" 
        placeholder="Username" 
        value ="'. $_SESSION["signup_data"]["username"] .'"
        >
    <span class="hint">
        <span class="hint-text">Username must be at least 5 characters long and contain only letters or numbers.</span>
    </span>       
</div> ';
  } else {
    echo '<div class="form-group">
    <input 
        name="username"
        type="text" 
        autofocus 
        maxlength="10" 
        class="input-f" 
        id="username" 
        placeholder="Username" 
        
        >
    <span class="hint">
        <span class="hint-text">Username must be at least 5 characters long and contain only letters or numbers.</span>
    </span>       
</div>';
  }
  

  if (isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["errors_signup"]["email_taken"]) && !isset($_SESSION["errors_signup"]["invalid_email"])) {
    echo '<div class="form-group">
    <input 
        name="email"
        type="email" 
        class="input-f" 
        id="email" 
        placeholder="Email"  
        value ="'. $_SESSION["signup_data"]["email"] .'">
</div> ';
  } else {
    echo '<div class="form-group">
    <input 
        name="email"
        type="email" 
        class="input-f" 
        id="email" 
        placeholder="Email"  >
</div> ';
  }
  echo '    <div class="form-group">
  <input 
      name="pwd"
      type="password" 
      class="input-f" 
      id="password" 
      placeholder="Password" 
      >   
  <span class="hint">
  <span class="hint-text">Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character.</span>
  </span>
</div>';
  echo '<div class="form-group">
  <input 
      name="confirmpwd"
      type="password" 
      class="input-f" 
      id="confirmPassword" 
      placeholder="Confirm Password"
      >
</div>';
}

?>

<head>
  <link rel="stylesheet" type="text/css" href="../css/signUp.css">
</head>

<?php
function check_signup_errors(){
  if (isset($_SESSION["errors_signup"])) {
    $errors = $_SESSION['errors_signup'];
    $error_message = implode('<br>', $errors);
    unset($_SESSION['errors_signup']);
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