function jiunge(){
    if(document.getElementById("phone").value.length != 10){
        alert("Phone number must be 10 digits");
        event.preventDefault();
    }
    else{
        let phone = document.getElementById("phone").value;

        let numbercheck = false;

        for(let i=0; i<phone.length; i++){
            if(isNaN(phone[i])){
                numbercheck = true;
                break;
            }
        }

        if(numbercheck){
            alert("Phone number must be numeric");
            event.preventDefault();
        }
    }
}