<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2a</title>
</head>
<body>
    <?php
        $nama_depan = "Billy";
        $nama_belakang = "Wicaksono";

        for ($i = 1; $i <= 100; $i++) {

            echo "<br>";

            if ($i % 3 == 0 && $i % 5 == 0) {
                echo "$nama_depan $nama_belakang";
            }

            else if ($i % 3 == 0) {
                echo "$nama_depan";
            }

            else if ($i % 5 == 0) {
                echo "$nama_belakang";
            }

            else {
                echo $i;
            }
            
        }
        
    ?>
</body>
</html>
