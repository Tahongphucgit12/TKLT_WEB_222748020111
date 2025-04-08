<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chẵn đậm</title>
    <link rel="stylesheet" href="bai7.css" text="text/css">
</head>
<body>
    <h2>Bảng Cửu Chương</h2>
            <?php
            for ($i = 1; $i <= 100; $i++) {
                if($i%2==0){
                    echo "<span class='bold'>$i </span>";
                }
                else{
                    echo "<span>$i </span>";
                }
            }
            ?>
        </tr>
    </table>
</body>
</html>