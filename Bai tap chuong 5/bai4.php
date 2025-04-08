<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TÍNH TOÁN SỐ HỌC</title>
    <link rel="stylesheet" href="bai4.css" type="text/css">
</head>
<body>
    <div class="container">
        <h3>TÍNH TOÁN SỐ HỌC</h3>
        <form method="post">
            <div class="input-group">
                <label for="so1">Số thứ 1:</label>
                <input type="number" name="so1" required value="<?php echo isset($_POST['so1']) ? $_POST['so1'] : ''; ?>">


            </div>
            <div class="input-group">
                <label for="so2">Số thứ 2:</label>
                <input type="number" name="so2" required value="<?php echo isset($_POST['so2']) ? $_POST['so2'] : ''; ?>">
            </div>
            <div class="input-group">
                <label for="ketqua">Kết quả:</label>
                <input type="text" name="ketqua" value="<?php echo isset($ketqua) ? $ketqua : ''; ?>" readonly>
            </div>
            <div class="button-group">
                <button type="submit" name="cong">Cộng</button>
                <button type="submit" name="tru">Trừ</button>
                <button type="submit" name="nhan">Nhân</button>
                <button type="submit" name="chia">Chia</button>
                <button type="submit" name="mod">Mod</button>

            </div>
        </form>

        <?php
        function USCLN($a, $b) {
            while ($b != 0) {
                $temp = $b;
                $b = $a % $b;
                $a = $temp;
            }
            return $a;
        }

        function BSCNN($a, $b) {
            return ($a * $b) / USCLN($a, $b);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $so1 = intval($_POST["so1"]);
            $so2 = intval($_POST["so2"]);
            
            if (isset($_POST["cong"])) {
                $ketqua =$so1 + $so2;
            } elseif (isset($_POST["tru"])) {
                $ketqua =$so1 - $so2;
            }
            elseif (isset($_POST["nhan"])) {
                $ketqua =$so1 * $so2;
            }elseif (isset($_POST["chia"])) {
                $ketqua =$so1 / $so2;
            }elseif (isset($_POST["mod"])) {
                $ketqua =$so1 % $so2;
            }
            echo "<script>document.getElementsByName('ketqua')[0].value = '$ketqua';</script>";
        }
        ?>
    </div>
</body>
</html>