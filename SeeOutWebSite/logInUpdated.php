
<?php

//require_once 'connect.php';
//require_once 'login_mod.php';
require_once 'login_view.php';
// require_once 'login_contr.php';
require_once 'php/config_session.inc.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log in</title>
  

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="./css/LogIn.css">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">



</head>
<body background="./icons/bluredbackground.png"> 
    
    <form action="formhandler_login.ali1.php" method="post" class="container" id="container1"  >
        <div class="top-cont">
            <button class="back-btn" > <img class="back-icon" src="./icons/back33.png"></button>    
            <h2 class="title">Log in</h2>
        </div>
        <div id="login-form">
            <div class="inputs">
                <input type="text" id="username" autofocus name="username" class="input-f" placeholder="Username" >
                <input type="password" id="password" name="password" class="input-f" placeholder="Password" >
            </div>
            <div class="m-cont">
                <button class="forgetB" type="button" ><a href="forgetPassEmail.php">Forget password?</a></button>
                <p class="txt">Don't have an account? <a class="link" href="signUpUpdated.php">Sign up</a></p>
            </div>
            <div class="b-cont">
                <button  class="btn"  >Login</button>
            </div>
            
        </div>
    </form>
   
    <?php
    // $username=$_POST['username'];
    check_login_errors();
    
    ?>
   
</body>
</html>