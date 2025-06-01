let msingi = document.querySelector('.msingi');
let upili = document.querySelector('.upili');
let pLevel = document.querySelector('.p-level');
let oLevel = document.querySelector('.o-level');
let aLevel = document.querySelector('.a-level');
let cat = document.querySelector('.category');
let sub = document.querySelector('.masomo');

let all = new Date();
let hours = all.getHours();
let mins = all.getMinutes();
let day = all.getDate();
let month = all.getMonth();
let year = all.getFullYear();

month++;

if(mins<10){
    mins = "0"+mins;
}

if(month<10){
    month = "0"+month;
}

let date = day+"-"+month+"-"+year;
let time = hours+":"+mins;

console.log(time);
console.log(date);

document.getElementById("time").value = time;
document.getElementById("date").value = date;

function levelize(){
    if(document.getElementById("level").value === "1"){
        pLevel.style.display = "block";
        oLevel.style.display = "none";
        aLevel.style.display = "none";
        cat.style.display = "none";
    }
    else{
        if(document.getElementById("level").value === "2"){
            cat.style.display = "block";
            pLevel.style.display = "none";
            oLevel.style.display = "none";
            aLevel.style.display = "none";
            sub.style.display = "none";
        }
        else{
            cat.style.display = "none";
            pLevel.style.display = "none";
            oLevel.style.display = "none";
            aLevel.style.display = "none";
            sub.style.display = "none";
        }
    }
}

function masomo(){
    if(document.getElementById("level").value === "2"){
        pLevel.style.display = "none";
        oLevel.style.display = "none";
        aLevel.style.display = "none";
        sub.style.display = "block";
    }
    else{
        pLevel.style.display = "none";
        oLevel.style.display = "none";
        aLevel.style.display = "none";
        sub.style.display = "none";
    }
}

function checksomo(){
    if(document.getElementById("category").value === "olevel"){
        pLevel.style.display = "none";
        oLevel.style.display = "block";
        aLevel.style.display = "none";
    }
    else{
        if(document.getElementById("category").value === "alevel"){
            pLevel.style.display = "none";
            oLevel.style.display = "none";
            aLevel.style.display = "block";
        }
        else{
            pLevel.style.display = "none";
            oLevel.style.display = "none";
            aLevel.style.display = "none";
        }
    }
}

function checkpdf(){
    let file = document.getElementById("notesfile").value;

    let type = "";

    for(let i=file.length-3; i<file.length; i++){
        type += file[i];
    }

    console.log(type);

    if(type === "pdf"){
        document.getElementById("typealert").innerHTML = "";
        return true;
    }
    else{
        document.getElementById("typealert").innerHTML = "*Only pdf format allowed!*";
        return false;
    }

}

function kagua(){
    if(document.getElementById("level").value === "none"){
        alert("Please choose the level!")
        event.preventDefault();
    }
    else{
        if(document.getElementById("level").value === "1"){
            if(document.getElementById("Psubject").value === "none"){
                alert("Please choose the Primary Class Subject!");
                event.preventDefault();
            }
        }
        else{
            if(document.getElementById("category").value === "none"){
                alert("Please choose Secondary category!");
                event.preventDefault();
            }
            else{
                if(document.getElementById("Osubject").value === "none" && document.getElementById("Asubject").value === "none"){
                    alert("Please choose Secondary Class Subject!");
                    event.preventDefault();
                }
            }
        }
        
    }

    if(!checkpdf()){
        document.getElementById("typealert").innerHTML = "*Only pdf format allowed!*";
        event.preventDefault();
    }
    else{
        document.getElementById("typealert").innerHTML = "";
    }
}