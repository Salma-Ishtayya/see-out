<?php
require_once 'config_session.inc.php';
require_once 'signup_view.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="./css/signUp.css">
  <link rel="stylesheet" href="./css/onAnimation.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <script src ="js/sweetalert.js"></script>
  <script src="./js/signUp.js"></script>

</head>
<body  background="./icons/hbluredbackground.png">
    <div  class="container1">   
        <div class="top-cont">
            <button  class="back-btn" onclick="back() "> <img class="back-icon" src="icons/back33.png"></button>   
            <h2 class="title">Sign Up</h2>
        </div>
        <form action="signup.inc.php" method="POST" id="firstContainer">   
            <div  class="form-container">  
            <?php signup_input(); ?>
                <button 
                    type="submit"
                    id="submitButton"
                    class="btn">
                    Next</button>
            </div>
            <?php
  check_signup_errors();
  ?>
         
        </form>
    </div>     

    



</body>
</html>      