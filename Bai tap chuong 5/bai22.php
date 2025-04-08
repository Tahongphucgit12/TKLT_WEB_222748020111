<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập khách hàng</title>
    <link rel="stylesheet" href="bai22.css" type="text/css">
</head>
<body>
    <div class="login-container">
        <h2>Đăng nhập khách hàng</h2>
        <form method="post">
            <div class="form-group">
                <label for="ten_khach_hang">Tên khách hàng</label>
                <input type="text" id="ten_khach_hang" name="ten_khach_hang" required>
            </div>
            <div class="form-group">
                <label for="so_dien_thoai">Số điện thoại</label>
                <input type="text" id="so_dien_thoai" name="so_dien_thoai" required>
            </div>
            <div class="buttons">
                <button type="submit">Đăng nhập</button>
            </div>
        </form>
        <?php
        $thoiGianTonTaiCookie = 600; // 10 phút

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $tenKhachHang = $_POST['ten_khach_hang'];
            $soDienThoai = $_POST['so_dien_thoai'];

            setcookie('ten_khach_hang', $tenKhachHang, time() + $thoiGianTonTaiCookie, '/');
            setcookie('so_dien_thoai', $soDienThoai, time() + $thoiGianTonTaiCookie, '/');

            echo '<div class="result">';
            echo '<p style="color: green;">Đăng nhập thành công! Thông tin đã được lưu trong cookie.</p>';
            echo '</div>';
        }

        if (isset($_COOKIE['ten_khach_hang']) && isset($_COOKIE['so_dien_thoai'])) {
            echo '<div class="result">';
            echo '<p><strong>Thông tin đã lưu (Cookie):</strong></p>';
            echo '<p>Tên khách hàng: ' . htmlspecialchars($_COOKIE['ten_khach_hang']) . '</p>';
            echo '<p>Số điện thoại: ' . htmlspecialchars($_COOKIE['so_dien_thoai']) . '</p>';
            echo '</div>';
        }
        ?>
        <div style="text-align: center; margin-top: 15px;">
            <a href="?logout=true" style="color: red; text-decoration: none;">Đăng xuất và xóa cookie</a>
        </div>
        <?php
        if (isset($_GET['logout'])) {
            setcookie('ten_khach_hang', '', time() - 3600, '/');
            setcookie('so_dien_thoai', '', time() - 3600, '/');
            echo '<div class="result">';
            echo '<p style="color: red;">Đã đăng xuất và xóa cookie thành công.</p>';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>