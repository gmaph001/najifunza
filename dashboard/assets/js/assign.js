let n = 0;

function even(a){
    if(a%2 == 0){
        return true;
    }
    else{
        return false;
    }
}
        
function chksubmit(){

    n++;

    let xtra = document.querySelector('.ifsubmitted');

    if(!even(n)){
        xtra.style.display = "block";
        document.getElementById("resub").value = "yes";
    }
    else{
        xtra.style.display = "none";
        document.getElementById("resub").value = "submit";
    }
}

function filetype(){
    let assignment = document.getElementById("assigned").value;
    let t = "";
    let type = "";
    
    for(let i=assignment.length-1; i>=0; i--){
        if(assignment[i] === "."){
            break;
        }
        else{
            t += assignment[i];
        }
    }

    for(let i=t.length-1; i>=0; i--){
        type += t[i];
    }

    if(type === "pdf" || type === "doc" || type === "docx"){
        document.getElementById("typealert").innerHTML = "";
        return true;
    }
    else{
        document.getElementById("typealert").innerHTML = "Make sure you submit your assignment in pdf, doc or docx format only!";
        return false;
    }
}

function kagua(){
    // event.preventDefault();

    let siku = new Date();
    let day = siku.getDate();
    let month = siku.getMonth();
    month++;
    if(month<10){
        month = "0"+month;
    }
    let year = siku.getFullYear();
    let today = "";

    let due = document.getElementById("ddate").value;
    let mwaka = "";
    let mwezi = "";
    let tar = "";
    let yote = "";

    today += year;
    today += month;
    today += day;

    console.log(today);

    for(let i=0; i<due.length; i++){
        if(due[i] === "-"){
            continue;
        }
        else{
            yote += due[i];
        }
    }

    for(let i=0; i<yote.length; i++){
        if(i<=3){
            mwaka += yote[i];
        }
        if(i>=4 && i<=5){
            mwezi += yote[i];
        }
        if(i>=6){
            tar += yote[i];
        }
    }

    let dueday = mwaka+mwezi+tar;

    console.log(dueday);

    let d = parseInt(dueday);
    let t = parseInt(today);
    let rem = d-t;

    if(rem<0){
        alert("Please make sure your due date is ahead of today!");
        event.preventDefault();
    }

    if(!filetype()){
        alert("Please check your file type!");
        event.preventDefault();
    }

    if(document.getElementById("resub").value === "yes"){
        if(document.getElementById("fmt").value === "none"){
            alert("Please choose the format which you would want your assignment be submitted!");
            event.preventDefault();
        }
    }
}