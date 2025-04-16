function jiunge(){
    if(document.getElementById("otp").value.length != 6){
        alert("OTP must be 6 digits");
        event.preventDefault();
    }
}