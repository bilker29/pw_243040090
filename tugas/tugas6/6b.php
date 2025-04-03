<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6b</title>
    <style>
        .kotak2,
        .kotak {
            display: inline-block;
            background-color: skyblue;
            width: 30px;
            height: 30px;
            color: black;
            text-align: center;
            line-height: 30px;
            border: 1px solid black;
            margin: 5px;
        }

        .kotak2 {
            background-color: blue;
            color: white;
        }
    </style>
</head>
<body>
<form action="" method="post">
        Masukkan angka:
        <input type="number" name="angka">
        <br>
        <button type="submit" name="submit">kirim</button>
    </form>

    <?php
    if (isset($_POST["angka"])) {
        $angka = $_POST["angka"];
        for ($i = $angka; $i >= 1; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                if ($i % 2 == 0) {
                    echo '<div class="kotak">' . $i . '</div>';
                } else {
                    echo '<div class="kotak2">' . $i . '</div>';
                }
            }
            echo "<br>";
        }
    } else {
    }
    ?>
</body>
</html>