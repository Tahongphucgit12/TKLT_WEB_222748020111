<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h2>Bài 8: Listbox năm</h2>
    
        <form>
        Năm: <select name='year'>
        <?php
        $currentYear = date("Y");
        $years = range(1900, $currentYear);
        foreach ($years as $year) {
        echo "<option value='$year'>$year</option>";
        }
    ?>
        </select>
        </form>

</body>
</html>