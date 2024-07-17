

<?php

require_once 'changepass_view.php';
require_once 'changepass_contr.php';
require_once 'php/config_session.inc.php';



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Change password</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/settinge.css">
  <script src ="js/sweetalert.js"></script>

</head>
<body background="./icons/hbluredbackground.png">

    <div class="current-pas" id="currentP" style="height: 420px;">
        <div class="top-cont">
          <a href="settings.html" style="padding-top: 10px;"><img class="b-btn2"  style="padding-top: 0px;" src="./icons/back33.png"></a>  
          <h2 class="tit" style="margin-top: 10px;margin-bottom: 10px;margin-left: 20px;">Change password</h2>
        </div>
        <form action="change_password_handler.php" method="post">
          <div class="cc">
            <p class="disc">Please enter current password </p>
            <input type="password" name="current_pass" class="inp-p" placeholder="Current password"><br>
          </div> 
          <div class="cc">
            <p class="disc">Enter new password </p>
            <input type="password" name="newpass" class="inp-p" placeholder="New password"><br>
            <input type="password" name="confirmpass" class="inp-p" placeholder="Confirm password"><br>

          </div>  
          <div class="but-cont">
            <input class="sub" type="submit" value="Next">
          </div>  
        </form>

        <?php
        
        check_changepass_errors()
        
        
        ?>

      </div>

    <script></script>
</body>
</html>