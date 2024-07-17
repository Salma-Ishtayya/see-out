<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Levels</title>
  <link rel="stylesheet" href="./css/levels.css" />
  <link rel="stylesheet" href="./css/onAnimation.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
</head>

<body background="./icons/hbluredbackground.png">
  <div class="header">
    <div class="left-section-of-header">
      <img class="logo" src="./icons/logo.png" />
    </div>
    <div style="display: flex; width: 50px; justify-content: center">
      <div class="icons" onmouseover="changeImage('./icons/menu2.png','im00')"
        onmouseout="changeImage('./icons/menu1.png','im00')">
        <img id="im00" class="icon1" onclick="hideToolbar()" src="./icons/menu1.png" style="margin-right: -8px" />
      </div>
    </div>
  </div>

  <div class="body-container">
    <div class="main">
      <div class="level-card" onclick='goTo("sec1-levels")'>
        <img id="ii" class="level-icon" src="./icons/vvv.png" />
        <div class="aaa">
          <div class="level-txt">
            <p class="card-title" style="text-align: center;">Level 1</p>
            <p class="card-desc">
            <ul style="color: white; padding: 0 10px 0px 23px;">
              <li>The Main Structure</li>
              <li>The cout Object</li>
              <li>endl and \n</li>
              <li>Escape Sequences</li>
            </ul>
            </p>
          </div>
          <div class="lock-container"></div>
        </div>
      </div>

      <div class="level-card" onclick='goTo("sec2-levels")'>
        <img class="level-icon" style="margin-left: 15px" src="./icons/vvv2.png" />
        <div class="level-txt">
          <p class="card-title" style="text-align: center;">Level 2</p>
          <p class="card-desc">
            <ul style="color: white; padding: 0 10px 0px 23px;">
              <li>Data Types</li>
              <li>Rules for Naming Variables</li>
              <li>Rubbish Data</li>
            </ul>
          </p>
        </div>
        <div class="lock-container"></div>
      </div>

      <div class="level-card" onclick='goTo("sec3-levels")'>
        <img class="level-icon" style="margin-left: 79px" src="./icons/vvv3.png" />
        <div class="level-txt">
          <p class="card-title" style="text-align: center;">Level 3</p>
          <p class="card-desc">
            <ul style="color: white; padding: 0 10px 0px 23px;">
              <li>Types of Operators</li>
              <li>The Order of Operations</li>
              <li>Increment & Decrement Operators</li>
            </ul>
          </p>
        </div>
        <div class="lock-container"></div>
      </div>

      <div class="level-card" onclick='goTo("sec4-levels")'>
        <img class="level-icon" style="width: 252px; height: 190px; padding-right: 3px" src="./icons/vvv4.png" />
        <div class="level-txt">
          <p class="card-title" style="text-align: center;">Level 4</p>
          <p class="card-desc">
            <ul style="color: white; padding: 0 10px 0px 23px;">
              <li>User Input</li>
            </ul>
          </p>
        </div>
        <div class="lock-container"></div>
      </div>
      <div class="level-card" onclick='goTo("sec5-levels")'>
        <img class="level-icon" style="width: 205px" src="./icons/vvv5.png" />
        <div class="level-txt">
          <p class="card-title" style="text-align: center;">Level 5</p>
          <p class="card-desc">
            <ul style="color: white; padding: 0 10px 0px 23px;">
              <li>types of if Statement</li>
              <li>Conditions</li>
            </ul>
          </p>
        </div>
        <div class="lock-container"></div>
      </div>
    </div>
    <div class="toolbar" id="toolbar">
      <div class="toolbar-item" style="background-color: rgba(19, 145, 203, 0.155)"
        onmouseover="changeImage('./icons/levels2.png','im1')" onmouseout="changeImage('./icons/levels1.png','im1')">
        <div id="tit1" class="toolbar-txt">
          <!--*********************************************************************************************************-->
          Levels
        </div>
        <div class="icons2">
          <img id="im1" class="icon2" src="./icons/levels1.png" />
        </div>
      </div>
      <a href="contactUs.php">
        <div class="toolbar-item" onmouseover="changeImage('./icons/email2.png','im3')"
          onmouseout="changeImage('./icons/email1.png','im3')">
          <div id="tit3" class="toolbar-txt">Contact us</div>
          <div class="icons2">
            <img id="im3" class="icon2" src="./icons/email1.png" />
          </div>
        </div>
      </a>
      <a href="settings.html">
        <div class="toolbar-item" onmouseover="changeImage('./icons/settings2.png','im6')"
          onmouseout="changeImage('./icons/settings1.png','im6')">
          <div id="tit6" class="toolbar-txt">Settings</div>
          <div class="icons2">
            <img id="im6" class="icon2" src="./icons/settings1.png" />
          </div>
        </div>
      </a>
      <a href="Home.html">
        <div class="toolbar-item" onmouseover="changeImage('./icons/logout2.png','im7')"
          onmouseout="changeImage('./icons/logout1.png','im7')">
          <div id="tit7" class="toolbar-txt">Log out</div>
          <div class="icons2">
            <img id="im7" class="icon2" src="./icons/logout1.png" />
          </div>
        </div>
      </a>
    </div>
  </div>

  <script>
    var flag = 1,
      Mflag = 1;

    function hideToolbar() {
      //hide toolbar titles

      var myArray = ["tit1", "tit3", "tit5", "tit6", "tit7"];
      if (flag === 1) {
        document.getElementById("toolbar").style.width = "90px";
        for (var i = 0; i < myArray.length; i++) {
          document.getElementById(myArray[i]).style.display = "none";
        }
        var x = 38;

        flag = 0;
      } else {
        document.getElementById("toolbar").style.width = "220px";
        for (var i = 0; i < myArray.length; i++) {
          document.getElementById(myArray[i]).style.display = "block";
        }
        flag = 1;
      }
    }

    function changeImage(newSrc, link) {
      //change icons when "onmuseover" or "onmuseout"
      var x = document.getElementById(link);
      x.src = newSrc;
      x.style.display = "inline";
    }

    function Mclick(newSrc, link) {
      //dispaly or stop music
      if (Mflag == 1) {
        //defult music off
        document.getElementById(link).src = "./icons/M1.png";
        AUD("play");
        Mflag = 0;
      } else {
        document.getElementById(link).src = "./icons/noM1.png";
        AUD("stop");
        Mflag = 1;
      }
    }
    function AUD(act) {
      if (act == "play") {
        console.log("hgfdsxcfghjk");
        audioElement = document.getElementById("myAudio");
        audioElement.play();
      } else {
        audioElement = document.getElementById("myAudio");
        audioElement.pause(); //stop music
      }
    }

    function goTo(where) {
      window.location.href = where + ".html";
    }
  </script>
</body>

</html> 