var D= new Date();
var namsinh, namhientai;
namhientai=D.getFullYear();
do{
    namsinh=prompt("Bạn sinh năm bao nhiêu?: ","");
    if(parseInt(namsinh)>namhientai){
        alert("Không hợp lệ");
    }
}while(parseInt(namsinh)>namhientai);

alert("tuổi của bạn bây giờ là: "+(namhientai-namsinh));