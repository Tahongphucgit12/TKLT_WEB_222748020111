function KiemTra(){
    var a=document.getElementsById("nd").value;
    if(a.length<=200)
        {
            document.getElementsByName("Sokytu")[0].value=a.length;

        }
    else{
        alert("Bạn đã gõ vượt quá số ký tự cho phép");
        return;
    }

}