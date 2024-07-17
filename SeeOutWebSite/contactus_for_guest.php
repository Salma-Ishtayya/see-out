<!--<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact us</title>
  <link rel="stylesheet" href="./css/master.css">
  <link rel="stylesheet" href="./css/contactUs.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


</head>
<body background="./icons/hbluredbackground.png">
    <div class="main" style="height: 600px; width: 1000px;justify-content: start;display: block;">
        
        <div style="display: block; width: 340px;">
                <div class="top">
                    <a href="levels.html"><button class="back-btn" > <img class="back-icon" src="./icons/back33.png"></button></a>    
                    <h2 class="title">Contact us</h2>
                </div>
            <div class="container">
                <form action="" method="" id="container1"  >
                    
                    <div id="login-form">
                        <div class="inputs">
                            <input 
                            type="text"   
                            name="email" 
                            class="input-f" 
                            placeholder="Email"
                            ></div>
                        <div class="inputs">
                            <input 
                            type="text"   
                            name="MessageTitle" 
                            class="input-f" 
                            placeholder="Message title"
                            ></div>
                            <div class="inputs"><textarea  
                            id="mes"
                            rows="10" 
                            cols="50"  
                            name="Message" 
                            class="input-f" 
                            placeholder="write your Message here" 
                            ></textarea></div>
                    </div>
                    
                        <div class="b-cont">
                            <button  class="btn"  onclick="submit1(event)" >Send </button>
                        </div>
                        
                    </div>
                </form>
        </div>
                <img class="mes-icon" id="Message" src="./icons/img11.png">
            </div>
                
        <div id="done" style="display: none;"> <h3 class="title">your Message sended successfully </h3></div>


</body>    -->

<?php

require_once 'contactus_for_guest_view.php';
require_once 'contactus_for_guest_contr.php';
require_once 'php/config_session.inc.php';



?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact us</title>
  <link rel="stylesheet" href="./css/master.css">
  <link rel="stylesheet" href="./css/contactUs.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <script src ="js/sweetalert.js"></script>

</head>
<body background="./icons/hbluredbackground.png">
    <div class="main" style="height: 580px;">
        
        <div style="width: 400px;">
            <div class="top">
                <a href="Home.html"><button class="back-btn" > <img class="back-icon" src="./icons/back33.png"></button></a>    
                <h2 class="title">Contact us</h2>
            </div>
            <form action="contactus_for_guest_handler.php" method="post" class="container" id="container1"  >
                
                <div id="login-form">
                    <div class="inputs">
                        <input 
                        type="text"   
                        name="MessageTitle" 
                        class="input-f" 
                        placeholder="Message title"
                        >
                        <input 
                        type="text"   
                        name="email" 
                        class="input-f" 
                        placeholder="Email"
                        >
                        <textarea  
                        id="mes"
                        rows="10" 
                        cols="50"  
                        name="Message" 
                        class="input-f" 
                        placeholder="Write Your Message Here" 
                        ></textarea>
                    </div>
                
                    <div class="b-cont">
                        <button  class="btn" style="margin-top: 0px;" onclick="submit1(event)" >Send </button>
                    </div>
                    
                </div>
            </form>
        </div>
        <?php
        check_errors();
        ?>
        <img class="mes-icon" id="Message" src="./icons/img11.png">
        <div id="done" style="display: none;"> <h3 class="title">your Message sended successfully </h3></div>

    </div>
</body>    