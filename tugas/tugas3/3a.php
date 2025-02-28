<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 3a</title>
</head>
<body>
    <?php 
        echo "<h4>Menghitung Luas Lingkaran</h4>";

        function hitungLuaslingkaran($r) {
            $luas = M_PI * $r * $r;
            return $luas;
        }

        $r = 10;
        $luasLingkaran = hitungLuaslingkaran($r);

        echo "<p>Jari-jari = $r cm</p>";
        echo "<p>Luas lingkaran = $luasLingkaran cm<sup>2</sup></p>";
        echo "<hr>";

        echo "<h4>Menghitung Keliling Lingkaran</h4>";

        function hitungKelilingLingkaran($r) {
            $keliling = 2 * M_PI * $r;
            return $keliling;
        }

        $r = 20;
        $kelilingLingkaran = hitungKelilingLingkaran($r);

        echo "<p>Jari-jari = $r cm</p>";
        echo "<p>Keliling lingkaran = $kelilingLingkaran cm</p>";
        echo "<hr>";
    ?>
</body>
</html>