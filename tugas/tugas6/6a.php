<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6a</title>
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
    <?php
    $input = $_GET["angka"] ?? null;
    $angka = is_string($input) ? filter_var($input, FILTER_VALIDATE_INT) : false;
    $angkaValid = $angka !== false && $angka >= 1 && $angka <= 50;
    ?>
    <form method="get">
        <label for="angka">Masukkan angka (1–50):</label>
        <input type="number" id="angka" name="angka" min="1" max="50" required>
        <button type="submit">Kirim</button>
    </form>

    <?php if (isset($_GET["angka"]) && !$angkaValid) : ?>
        <p>Masukkan bilangan bulat antara 1 dan 50.</p>
    <?php elseif ($angkaValid) : ?>
        <?php for ($i = $angka; $i >= 1; $i--) : ?>
            <?php for ($j = 1; $j <= $i; $j++) : ?>
                <div class="<?= $i % 2 === 0 ? 'kotak' : 'kotak2' ?>"><?= $i ?></div>
            <?php endfor; ?>
            <br>
        <?php endfor; ?>
    <?php endif; ?>
</body>
</html>