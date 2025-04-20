let msingi = document.querySelector('.msingi');
let upili = document.querySelector('.upili');
let pLevel = document.querySelector('.p-level');
let oLevel = document.querySelector('.o-level');
let aLevel = document.querySelector('.a-level');
let cat = document.querySelector('.category');
let sub = document.querySelector('.masomo');

function levelize(){
    if(document.getElementById("level").value == 1){
        msingi.style.display = "block";
        cat.style.display = "none";
        upili.style.display = "none";
        pLevel.style.display = "none";
        oLevel.style.display = "none";
        aLevel.style.display = "none";
        sub.style.display = "none";
        document.getElementById("secondary").value === "none";
    }
    else{
        if(document.getElementById("level").value == 2){
            upili.style.display = "block";
            cat.style.display = "block";
            msingi.style.display = "none";
            pLevel.style.display = "none";
            oLevel.style.display = "none";
            aLevel.style.display = "none";
            sub.style.display = "none";
            document.getElementById("primary").value === "none";
        }
        else{
            upili.style.display = "none";
            msingi.style.display = "none";
            pLevel.style.display = "none";
            oLevel.style.display = "none";
            aLevel.style.display = "none";
            sub.style.display = "none";
            document.getElementById("primary").value === "none";
            document.getElementById("secondary").value === "none";
        }
    }
}

function masomo(c){
    if(c === "primary"){
        pLevel.style.display = "block";
        oLevel.style.display = "none";
        aLevel.style.display = "none";
        sub.style.display = "none";
    }
    else{
        if(c === "secondary"){
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
    
    
}

function checksomo(){
    if(document.getElementById("secondary").value<5){
        oLevel.style.display = "block";
        aLevel.style.display = "none";
    }
    else if(document.getElementById("secondary").value >=5){
        oLevel.style.display = "none";
        aLevel.style.display = "block";
    }
}

function kagua(){
    if(document.getElementById("level").value === "none"){
        alert("Please choose the level!")
        event.preventDefault();
    }
    else{
        if(document.getElementById("primary").value === "none" && document.getElementById("secondary").value === "none" && document.getElementById("category").value === "none"){
            alert("Please choose class!");
            event.preventDefault();
        }
        else{
            if(document.getElementById("Psubject").value === "none" && document.getElementById("Osubject").value === "none" && document.getElementById("Asubject").value === "none"){
                alert("Please choose subject!");
                event.preventDefault();
            }
        }
    }

    if(document.getElementById("category").value === "none"){
        alert("Please choose Category!");
        event.preventDefault();
    }
}