document.getElementById("update").addEventListener("click",function(){
    document.title= document.getElementsByName("TieuDe")[0].value; 
    document.body.style.backgroundColor= document.getElementsByName("MauNen")[0].value;
    document.fgColor= document.getElementsByName("MauChu")[0].value;
    window.status = document.getElementsByName("TrangThai")[0].value;
s
})