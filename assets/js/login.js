let register1 = document.querySelector('.register1');
let login = document.querySelector(".login");
let btn1 = document.querySelector('.signup');
let btn2 = document.querySelector('.loginbtn');
let show1 = document.getElementById("show1");
let show2 = document.getElementById("show2");
let show3 = document.getElementById("show3");

function isEven(n){
    if(n%2 == 0){
        return true;
    }
    else{
        return false;
    }
}

let a = 0;
let b = 0;
let c = 0;

btn1.addEventListener('click', function(){
    register1.setAttribute("class", "register");
    login.setAttribute("class", "login1");
})

btn2.addEventListener('click', function(){
    login.setAttribute("class", "login");
    register1.setAttribute("class", "register1");
})

show1.addEventListener('click', function(){
    a++;

    if(!isEven(a)){
        show1.src = "media/icons/eye.png";
        document.getElementById("Password1").setAttribute("type", "text");
    }
    else{
        show1.src = "media/icons/hidden.png";
        document.getElementById("Password1").setAttribute("type", "password");
    }
})

show2.addEventListener('click', function(){
    b++;

    if(!isEven(b)){
        show2.src = "media/icons/eye.png";
        document.getElementById("Password2").setAttribute("type", "text");
    }
    else{
        show2.src = "media/icons/hidden.png";
        document.getElementById("Password2").setAttribute("type", "password");
    }
})

show3.addEventListener('click', function(){
    c++;

    if(!isEven(c)){
        show3.src = "media/icons/eye.png";
        document.getElementById("Password3").setAttribute("type", "text");
    }
    else{
        show3.src = "media/icons/hidden.png";
        document.getElementById("Password3").setAttribute("type", "password");
    }
})

function sajili(){
    if(document.getElementById("Password2").value !== document.getElementById("Password3").value){
        alert("You have confirmed password incorrectly! Please recheck!");
        event.preventDefault();
    }
}