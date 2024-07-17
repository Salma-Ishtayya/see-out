function onSubmitButtonClick(event) {
  event.preventDefault();

    var confirmPassword = document.getElementById('confirmPassword').value;
    var password= document.getElementById('password').value;


                
    if (password!=="" && password === confirmPassword)
    {     
       // document.getElementById('firstContainer').submit();   //if (username & email not reserved )    
        window.location.href = "confirmation.html";

        

    }
    else{ alert('pass does not match')
    }




} 
function back() {
  window.location.href = "Home.html";
}

