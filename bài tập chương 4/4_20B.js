function cacl(){
    var hs= parseFloat(document.getElementsByName("HeSo")[0].value);
    var lcs= parseFloat(document.getElementsByName("LuongCoSo")[0].value);
    var lcb=lcs*hs;
    document.getElementsByName("LuongCoBan")[0].value=lcb;
    var pc=lcb*0.25;
    document.getElementsByName("PhuCap")[0].value=pc;
    var y=new Date();
    var tn= y.getFullYear()- parseInt(document.getElementsByName("Namvaolam")[0].value)
    document.getElementsByName("ThamNien")[0].value=tn;
    document.getElementsByName("Thanhtien")[0].value= lcb*pc;
}