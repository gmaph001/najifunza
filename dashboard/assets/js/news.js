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