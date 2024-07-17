<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Confirmation</title>
  <link rel="stylesheet" href="./css/confirmation.css">
  <link rel="stylesheet" href="./css/onAnimation.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <script src="./js/confirmation.js"></script>
  <script src="js/sweetalert.js"></script>
  <style>

  </style>
</head>
<body  background="./icons/hbluredbackground.png">
  
    <div class="container">

        <div class="top-cont">
        <a href="signUpUpdated.php"> <img class="back-icon" src="./icons/back33.png"></a>     
          <h2 class="title">Confirmation</h2>
        </div>
        <form action="verify_code.php" method="post"  id="container2"  >
          
            <div id="forgot-password-form" class="fbc">
                <h3 class="txt2">We have sent a confirmation Code to your email</h4>
                <div class="sub-container">
                    
                  <input name = "verification_code" class="input-f" id="configCode" autofocus maxlength="6"  placeholder="Confirmation Code" >
                  <!-- <div class="clock" id="counter">0</div> -->
                  <div class="btn-container">
                        <button class="btn1" type="submit">Next</button>
                        <!-- <button class="btn2" onclick="resendCode()" name ="resendcode">resend code</button> -->
                  </div>
                </div>
            </div>
    
        </form>
    </div>


</body>
</html>