//tạo mảng lưu trữ dữ liệu
var soLuong = parseInt(prompt("Nhập vào số lượng thiết bị"));
//isNaN = is Not A Number
while (isNaN(soLuong) || soLuong <= 0) {
  alert("Vui lòng nhập lại số lượng");
  soLuong = prompt("Nhập vào số lượng thiết bị");
}
var arr = new Array(soLuong);
for (var i = 0; i < soLuong; i++) {
  arr[i] = prompt("Nhập vào tên thiết bị thứ " + (i + 1));
}
  // Tìm bảng trong HTML
  const tableBody = document.querySelector('#product-table tbody');
  
  for (var i = 0; i < soLuong; i++) {
    const row = document.createElement('tr');
  
    // Tạo các ô cho từng thuộc tính của sản phẩm
    const idCell = document.createElement('td');
    idCell.textContent = i+1;
    row.appendChild(idCell);

    const nameCell = document.createElement('td');
    nameCell.textContent = arr[i];
    row.appendChild(nameCell);
    
    // Thêm dòng vào bảng
    tableBody.appendChild(row);
  }


  