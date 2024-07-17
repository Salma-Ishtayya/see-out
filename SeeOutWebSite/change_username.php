<?php

require_once 'change_username_view.php';
require_once 'change_username_contr.php';
require_once 'php/config_session.inc.php';

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Change username</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/settinge.css">


</head>
<body background="./icons/hbluredbackground.png">

    <div class="current-pas" id="currentP" >
        <div class="top-cont">
          <a href="settings.html" style="padding-top: 10px;"><img class="b-btn2"  style="padding-top: 0px;" src="./icons/back33.png"></a>  
          <h2 class="tit" style="margin-top: 10px;margin-bottom: 10px;margin-left: 20px;">Change username</h2>
        </div>
        <form action="change_username_handler.php" method="post">
          <div class="cc">
            <p class="disc">Please enter current password </p>
            <input type="password" name="password" class="inp-p" placeholder="Current password"><br>
          </div> 
          <div class="cc">
            <p class="disc">Please enter new username </p>
            <input type="text" name="new_username" class="inp-p" placeholder="New username"><br>
          </div>  
          <div class="but-cont">
            <input class="sub" type="submit" value="Next">
          </div>  
        </form>

          <?php
          
          check_change_username_errors();
          
          
          ?>



      </div>

    <script></script>
</body>
</html>
    