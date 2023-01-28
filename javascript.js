var myVideo = document.getElementById("video1");

function playicon() {
    myVideo.play();
}

var accept = document.getElementById('accept');
var remove = document.getElementById('remove');

function disappear() {
    document.getElementById("reqProfile").style.display = "none";
}

function accepted() {
    document.getElementById("reqProfile").style.backgroundColor = "rgb(75,222,128)";
    document.getElementById("remove").style.display = "none";
    document.getElementById("accept").innerHTML = "Accepted!";
    document.getElementById("accept").style.backgroundColor = "green";
    document.getElementById("accept").style.color = "white";
    document.getElementById("reqProfile").style.color = "white";
}


function borderred() {
    document.getElementById("reqProfile").style.borderColor = "red";
}

function bordernone() {
    document.getElementById("reqProfile").style.borderColor = "white";
}

function bordergreen() {
    document.getElementById("reqProfile").style.borderColor = "green";
}

