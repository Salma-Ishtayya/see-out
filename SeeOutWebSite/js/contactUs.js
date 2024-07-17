


var images = ["./icons/em1.png", "./icons/em2.png", "./icons/em3.png", "./icons/em4.png", "./icons/em5.png", "./icons/em6.png", "./icons/em7.png", "./icons/em8.png"];
var currentIndex = 0; // Current index of the image

function changeImage() {
  document.getElementById('Message').src = images[currentIndex];
  currentIndex++;
    if (currentIndex >= images.length) {
    currentIndex = 0;
  }
}
setInterval(changeImage, 900);









function submit1(event){
  event.preventDefault();
  if (document.getElementById("mes").value!=="")
 {   document.getElementById('container1').submit(); 

  /*if (message sended) ************************************************************************************
    document.getElementById("container1").style.display="none";
    document.getElementById("done").style.display="block";
  */}
  else {
    document.getElementById("mes").style.border=" 1px solid #F7112B";
    document.getElementById("mes").placeholder="Enter message"  }

}

