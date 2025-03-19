function doimau(){
    var e = document.getElementById("ddlViewBy");
    document.body.style.backgroundColor= e.value;
}

document.getElementById("red").addEventListener("click", function(){
    document.body.style.backgroundColor= document.getElementById("red").value;
})
document.getElementById("green").addEventListener("click", function(){
    document.body.style.backgroundColor= document.getElementById("green").value;
})
document.getElementById("blue").addEventListener("click", function(){
    document.body.style.backgroundColor= document.getElementById("blue").value;
})
