
function submit1(event){
    event.preventDefault();
    if (document.getElementById("username").value!=="" && document.getElementById("password").value!=="" )
    {
         document.getElementById('container1').submit(); 
         /* if (user exist & pass mach)  {  window.location.href = "";}  */

}
    else {
        if (document.getElementById("username").value==""  ){
            document.getElementById("username").style.border=" 1px solid #F7112B";
            document.getElementById("username").placeholder="Enter username"
        }
        if (document.getElementById("password").value==""  ){
            document.getElementById("password").style.border=" 1px solid #F7112B";
            document.getElementById("password").placeholder="Enter password"
        }

    }
}

  


