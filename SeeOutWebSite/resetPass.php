<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset password</title>
  <link rel="stylesheet" href="./css/LogIn.css">
  <link rel="stylesheet" href="./css/onAnimation.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
 <script src="js/sweetalert.js"></script>


</head>
<body  background="./icons/hbluredbackground.png">
    <div class="container" style="height: auto;">
        <div class="top-cont" style="padding: 0; width: 400px;">
            <a href="Home.html"> <img class="back-icon" src="./icons/back33.png"></a>    
            <h2 class="title" style="width: auto; margin-left: 30px;">Reset your password</h2>
        </div>
        <form action="changepasswordProccess.php" method="post" id="container1"  >
            <div >
                <div class="inputs">
                    <input type="text"  autofocus name="username" class="input-f" placeholder="Username" >
                    <input type="password" id="username"  name="newpassword" class="input-f" placeholder="Password" >
                    <input type="password" id="ConfirmPassword" name="confirmpassword" class="input-f" placeholder="Confirm password" >
                </div>
                <div class="b-cont">
                    <input  class="btn" value="Reset" type="submit" >
                </div>
                
            </div>
        </form>
    </div>    
    <script></script>
</body>
</html>