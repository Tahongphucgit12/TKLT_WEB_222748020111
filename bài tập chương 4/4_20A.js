function cacl(){
    var a=parseFloat(document.getElementsByName("Soluong")[0].value);
    var b= parseFloat(document.getElementsByName("Dongia")[0].value);

    document.getElementsByName("Thanhtien")[0].value= a*b;

}