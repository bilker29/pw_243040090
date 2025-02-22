<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2c</title>
    <style>
        .box {
            width: 50px;
            height: 50px;
            background-color: salmon;
            border: 1px solid black;
            text-align: center;
            line-height: 50px;
            display:  inline-block;
        }
    </style>
</head>
<body>
    <?php
        for ($i = 10; $i >= 1; $i--) {

            for ($h = 1; $h <= $i; $h++) {
                echo '<div class ="box">'.$h.'</div>' ;
            }

            echo "<br>";
        }
    ?>
</body>
</html>