<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4b</title>
    <style>
        li {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <?php
        $perangkat = ['Motherboard', 'Processor', 'Hard Diks', 'PC Coller', 'VGA Card', 'SSD'];
    ?>

    <h2>Macam-macam perangkat keras komputer</h2>
    <ol>
        <?php foreach ($perangkat as $item) {?>
            <li> <?= $item?> </li>
        <?php } ?>
    </ol>
    
    <h2>Macam-macam perangkat keras komputer baru</h2>
    <ol>
        <?php 
        array_push ($perangkat, 'Card Reader', 'Modem');
        sort($perangkat);
        foreach ($perangkat as $item) { ?>
         <li><?= $item ?></li>
        <?php } ?>
    </ol>
</body>
</html>