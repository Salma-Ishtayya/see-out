<?php
require_once 'connect.php';
require_once 'php/forget_view.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forget password</title>
  <link rel="stylesheet" href="./css/LogIn.css">
  <link rel="stylesheet" href="./css/onAnimation.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <script src ="js/sweetalert.js"></script>


</head>
<body  background="./icons/hbluredbackground.png">
    <div class="container" style="height: 300px;">
        <div class="top-cont" style="padding-left: 40px;">
            <a href="logInUpdated.php"> <img class="back-icon" src="./icons/back33.png"></a>    
            <h2 class="title" style="margin-left: 20px;">Verification</h2>
        </div>

        <form action="php/forget.inc.php" method="POST"  >
            <div id="login-form">
                <div class="inputs">
                    <p class="txt2">Enter email to access your account</p>

                    <input type="text"  name="email" class="input-f" placeholder="Email" >

                </div>
                <div class="b-cont">

                    <input  class="btn"  type="submit"  value="Next">
            <?php
            check_forget_errors()
            ?>
                </div>
            </div>
        </form>

    </div>    
    <script ></script>
</body>
</html>