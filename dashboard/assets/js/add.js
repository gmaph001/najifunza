let msingi = document.querySelector('.msingi');
let upili = document.querySelector('.upili');

function levelize(){
    if(document.getElementById("level").value == 1){
        msingi.style.display = "block";
        upili.style.display = "none";
    }
    else{
        if(document.getElementById("level").value == 2){
            upili.style.display = "block";
            msingi.style.display = "none";
        }
        else{
            upili.style.display = "none";
            msingi.style.display = "none";
        }
    }
}

function kagua(){
    if(document.getElementById("level").value === "none"){
        alert("Please choose the level!")
        event.preventDefault();
    }
    else{
        if(document.getElementById("primary").value === "none" && document.getElementById("secondary").value === "none"){
            alert("Please choose class!");
            event.preventDefault();
        }
    }
}