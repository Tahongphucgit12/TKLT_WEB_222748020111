<!DOCTYPE html>
<html>
<head>
    <title>Xử lý Ma Trận</title>
    <style>
        table {
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Xử lý Ma Trận</h1>

    <?php
    $matrix = array(1, 2, 3, 4, 5, 6, 7, 8, 9);


    function timSoLonNhat($mang) {
        $max = $mang[0];
        for ($i = 0; $i < count($mang); $i++) {
                if ($mang[$i] > $max) {
                    $max = $mang[$i];
                }
            }
        return $max;
    }

    function timSoNhoNhat($mang) {
        $min = $mang[0];
        for ($i = 0; $i < count($mang); $i++) {
                if ($mang[$i] < $min) {
                    $min = $mang[$i];
                }
            }
        return $min;
    }

    function tinhTongMaTran($mang) {
        $tong = 0;
        for ($i = 0; $i < count($mang); $i++) {
                $tong += $mang[$i];
            }
        return $tong;
    }

    function inChan($mang) {
        echo "In các số chẵn:";
        for ($i = 0; $i < count($mang); $i++) {
            if($mang[$i]%2==0){
                echo $mang[$i];echo " ";
            }
        }
    }

    function inLe($mang) {
        echo "In các số lẻ: ";
        for ($i = 0; $i < count($mang); $i++) {
            if($mang[$i]%2==0){
                echo $mang[$i];echo " ";
            }
        }
    }

    if (isset($_POST['choice'])) {
        $choice = $_POST['choice'];

        switch ($choice) {
            case 1:
                echo "<p>Số lớn nhất: " . timSoLonNhat($matrix) . "</p>";
                break;
            case 2:
                echo "<p>Số nhỏ nhất: " . timSoNhoNhat($matrix) . "</p>";
                break;
            case 3:
                echo inChan($matrix);
                break;
            case 4:
                echo inLe($matrix);
                break;
            default:
                echo "<p>Lựa chọn không hợp lệ.</p>";
        }
    }
    ?>

    <form method="post">
        <label for="choice">Chọn chức năng:</label>
        <select name="choice" id="choice">
            <option value="1">Tìm số lớn nhất</option>
            <option value="2">Tìm số nhỏ nhất</option>
            <option value="3">In các số chẵn</option>
            <option value="4">In các số lẻ</option>
        </select>
        <button type="submit">Thực hiện</button>
    </form>
</body>
</html>