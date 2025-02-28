<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Coba Looping</title>
    <style>
        .kotak {
            width: 15px;
            height: 30px;
            text-align: center;
            line-height: 30px;
            background-color: skyblue;
            font-size: 0.8em;
            display: inline-block;
        }
    </style>
</head>
<body>
    <?php for ($i = 1; $i <= 5; $i++) { ?>
    <div class="kotak"><?php echo $i; ?></div>
    <?php } ?>
</body>
</html>