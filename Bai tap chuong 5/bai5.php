<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính USCLN và BSCNN</title>
    <link rel="stylesheet" href="bai5.css" type="text/css">
</head>
<body>
    <div class="container">
        <h3>TÍNH USCLN VÀ BSCNN</h3>
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
                <button type="submit" name="uscln">USCLN</button>
                <button type="submit" name="bscnn">BSCNN</button>
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
            
            if (isset($_POST["uscln"])) {
                $ketqua = USCLN($so1, $so2);
            } elseif (isset($_POST["bscnn"])) {
                $ketqua = BSCNN($so1, $so2);
            }
            echo "<script>document.getElementsByName('ketqua')[0].value = '$ketqua';</script>";
        }
        ?>
    </div>
</body>
</html>