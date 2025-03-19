document.getElementById("btn1").addEventListener("click", function(){
    document.getElementById("kq").value = parseFloat(document.getElementById("so1").value)+parseFloat(document.getElementById("so2").value)
})
document.getElementById("btn2").addEventListener("click", function(){
    document.getElementById("kq").value = parseFloat(document.getElementById("so1").value) - parseFloat(document.getElementById("so2").value)
})
document.getElementById("btn3").addEventListener("click", function(){
    document.getElementById("kq").value = parseFloat(document.getElementById("so1").value) * parseFloat(document.getElementById("so2").value)
})
document.getElementById("btn4").addEventListener("click", function(){
    document.getElementById("kq").value = parseFloat(document.getElementById("so1").value)/ parseFloat(document.getElementById("so2").value)
})

document.getElementById("rbtn1").addEventListener("click", function(){
    document.getElementById("kq").value = parseFloat(document.getElementById("so1").value)+parseFloat(document.getElementById("so2").value)
})
document.getElementById("rbtn2").addEventListener("click", function(){
    document.getElementById("kq").value = parseFloat(document.getElementById("so1").value) - parseFloat(document.getElementById("so2").value)
})
document.getElementById("rbtn3").addEventListener("click", function(){
    document.getElementById("kq").value = parseFloat(document.getElementById("so1").value) * parseFloat(document.getElementById("so2").value)
})
document.getElementById("rbtn4").addEventListener("click", function(){
    document.getElementById("kq").value = parseFloat(document.getElementById("so1").value)/ parseFloat(document.getElementById("so2").value)
})