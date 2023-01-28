
const userlist = document.querySelector(".reqList");

setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("GET","notify.php",true);
    xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                userlist.innerHTML = data;
            }
        }
    }
    xhr.send();
}, 8000);

