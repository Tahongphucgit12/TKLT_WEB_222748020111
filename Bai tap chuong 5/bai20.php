<?php
// Bắt đầu session
session_start();

// Thời gian hết hạn phiên (ví dụ: 5 phút)
$session_timeout = 5 * 60; // 5 phút tính bằng giây

// Kiểm tra nếu người dùng đã đăng nhập
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
    // Kiểm tra thời gian hết hạn của phiên
    $current_time = time(); // Lấy thời gian hiện tại
    $session_start_time = $_SESSION['session_start_time']; // Thời gian phiên bắt đầu

    if (($current_time - $session_start_time) > $session_timeout) {
        // Nếu thời gian phiên đã hết, đăng xuất người dùng
        session_unset(); // Xóa tất cả dữ liệu session
        session_destroy(); // Hủy session
        echo "<script>alert('Phiên làm việc của bạn đã hết hạn. Bạn đã tự động đăng xuất.');</script>";
        header("refresh:3;url=bai5.php"); // Redirect về trang login sau 3 giây
        exit;
    } else {
        // Nếu thời gian chưa hết, vẫn giữ người dùng đăng nhập
        echo "<script>alert('Nguoi dung van dang nhap)';</script>";
        // Tiếp tục xử lý thông thường
    }
} else {
    // Nếu người dùng chưa đăng nhập
    echo "<script>alert('Nguoi dung chua dang nhap hoac da het phien');</script>";
}

// Kiểm tra nếu form được gửi
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lấy dữ liệu từ form
    $email = $_POST['email'];
    $password = $_POST['password'];
    $maso = $_POST['maso'];

    // Kiểm tra thông tin đăng nhập
    if ($email === "test@blu.edu.vn" && $password === "123456" && $maso === "BLU001") {
        // Đăng nhập thành công, lưu thông tin vào session
        $_SESSION['loggedIn'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['maso'] = $maso;
        $_SESSION['session_start_time'] = time(); // Lưu thời gian bắt đầu phiên
        echo "<script>alert('Dang nhap thanh cong');</script>";
        // Redirect hoặc thực hiện các hành động khác
        header("refresh:3;url=bai20.php");
    } else {
        echo "<script>alert('Dang nhap thanh cong');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập thành viên</title>
    <link rel="stylesheet" href="bai20.css" type="text/css">
</head>
<body>
    <div class="login-container">
        <h2>Đăng nhập thành viên</h2>
        <form method="post" action="bai20.php">
            <div class="form-group">
                <label for="email">Email name</label>
                <div class="input-group">
                    <input type="text" id="email" name="email" placeholder="@ blu.edu.vn">
                    <span class="input-icon">✉</span>
                </div>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-group">
                    <input type="password" id="password" name="password">
                    <span class="input-icon">👁</span>
                </div>
            </div>
            <div class="form-group">
                <label for="maso">Mã số</label>
                <input type="text" id="maso" name="maso">
            </div>
            <button type="submit">Đăng nhập</button>
            <button type="button">Đăng ký</button>
        </form>
        <div id="alert"><p></p></div>
    </div>
</body>
</html>
