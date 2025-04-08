<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng Cửu Chương</title>
    <style>
        table {
            width: 20%;
            border-collapse: collapse;
            border:3px solid black;
        }
        th,td{
            border:5px solid black;
        }
        td {
            padding: 5px;
            text-align: center;

        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Số n</th>
            <th>Số n<sup>2</sup></th>
         </tr>

        <tbody>
        <?php
            for ($i = 0; $i <= 50; $i++) {
        ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $i *$i ?></td>
            </tr>
        <?php      
        }
            ?>
        </tbody>
    </table>
</body>
</html>