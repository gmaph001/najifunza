function checkpass(){
    if(document.getElementById("newPassword").value !== document.getElementById("renewPassword").value){
        alert("Please, recheck your password and make sure to confirm same password!");
        event.preventDefault();
    }
}