
var counterValue = 59;
var intervalId;
var generatedNumber;


// Retrieve the username from the URL parameter
var urlParams = new URLSearchParams(window.location.search);
var username = urlParams.get('username');//*****************************************username

window.onload = function() {
    startCounter();
    handleClick();
};

function resendCode(){
    handleClick();
    resetCounter();
}


function startCounter() {
    clearInterval(intervalId);
    counterValue = 59;
    document.getElementById('counter').textContent = '00:'+counterValue;
    intervalId = setInterval(updateCounter, 1000);
  }


function updateCounter() {
  counterValue--;
  if (counterValue <= 0) {
    clearInterval(intervalId);
    counterValue = "click resend the code";
    document.getElementById('counter').textContent = counterValue;

  }
  else 

  document.getElementById('counter').textContent = '00:'+counterValue;
}

function resetCounter() {
  clearInterval(intervalId);
  counterValue = 59;
  document.getElementById('counter').textContent = '00:'+counterValue;
  startCounter();
}


function handleClick() {    //stor code and cleare it after 60s     
    let newNumber = generateFourDigitNumber();
    generatedNumber = newNumber;                      //******************************************************already chicked if username exist, send "generatedNumber" to his email
    console.log(generatedNumber)
    setTimeout(function() {
    generatedNumber = null;
    }, 60000); 

}

function generateFourDigitNumber() {   //generate code
    generatedNumber= Math.floor(Math.random() * 9000) + 1000;
    return generatedNumber;
}

function submitForm(event) {
event.preventDefault();

const configCode = document.getElementById('configCode').value;
if (generatedNumber == configCode) {
    document.getElementById('container2').submit();
    window.location.href = "levels.html";

} else {
    alert('Wrong code');
}
}