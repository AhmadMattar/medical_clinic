const pargMess = document.getElementById("pargMessage");
const superparts = document.querySelectorAll(".superpart");
const sidebarlinks = document.querySelectorAll(".sidebarlink");

function myFunction() {
    t = setTimeout(hideBar,3000)
}
function hideBar(){
    pargMess.style.display="none";
}
for(let i=0;i<superparts.length;i++){
    superparts[i].onclick=function(){
        if(sidebarlinks[i].style.display == "block")
            sidebarlinks[i].style.display= "none";
        else
            sidebarlinks[i].style.display ="block";
    }
}
myFunction()

var today = new Date().toISOString().slice(0, 16);
document.getElementsByName("date")[0].setAttribute('min', today);
