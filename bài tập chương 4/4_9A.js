var Soluong, x;
var DS= new Array(100);
Soluong= prompt("Bạn cần nhập bao nhiêu người: ",5);
for(i=0; i<Soluong;i++){
    DS[i]=prompt("Nhập vào họ tên: ","");
}
DS.sort();
document.write("<h1>Danh sách đã sắp xếp là </h1>");
for(x in DS){
    document.write(DS[x]);
    document.write("<br>");
}
