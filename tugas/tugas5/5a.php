<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 5a</title>
</head>
<body>
    <?php
    $mahasiswa=[
        [
            "nama" => "Miftah Mirza Mardiansyah",
            "nrp" => "243040082",
            "email" => "MIFTAH.243040082@mail.unpas.ac.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "nabila.jpg"
        ],
        [
            "nama" => "Muhammad Nur Salam",
            "nrp" => "243040083",
            "email" => "NUR.243040083@mail.unpas.ac.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "nabila.jpg"
        ],
        [
            "nama" => "Nazala Qisti",
            "nrp" => "243040084",
            "email" => "NAZALA.243040084@mail.unpas.ac.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "nabila.jpg"
        ],
        [
            "nama" => "Muhammad Faisyal Nur Pratama",
            "nrp" => "243040085",
            "email" => "FAISYAL.243040085@mail.unpas.ac.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "nabila.jpg"
        ],
        [
            "nama" => "Ghryshvi Taushiyah Dzickra",
            "nrp" => "243040086",
            "email" => "GHRYSHVI.243040086@mail.unpas.ac.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "nabila.jpg"
        ],
        [
            "nama" => "Muhammd Farrel Triputra Alfarizqi",
            "nrp" => "243040087",
            "email" => "FARREL.243040087@mail.unpas.ac.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "nabila.jpg"
        ],
        [
            "nama" => "Rifqi Atha dwi Fahrezi",
            "nrp" => "243040088",
            "email" => "RIFQI.243040088@mail.unpas.ac.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "nabila.jpg"
        ],
        [
            "nama" => "Arneu Raysa",
            "nrp" => "243040089",
            "email" => "ARNEU.243040089@mail.unpas.ac.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "nabila.jpg"
        ],
        [
            "nama" => "Billy Wicaksono",
            "nrp" => "243040090",
            "email" => "BILLY.243040090@mail.unpas.ac.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "nabila.jpg"
        ],
        [
            "nama" => "Adriel Reihansyah Setiawan",
            "nrp" => "243040091",
            "email" => "ADRIEL.243040091@mail.unpas.ac.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "nabila.jpg"
        ],
        [
            "nama" => "Afsal Prima Maulana",
            "nrp" => "243040092",
            "email" => "AFSAL.243040092@mail.unpas.ac.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "nabila.jpg"
        ],
        [
            "nama" => "Akbar Putra Pamungkas",
            "nrp" => "243040093",
            "email" => "AKBAR.243040093@mail.unpas.ac.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "nabila.jpg"
        ],
        [
            "nama" => "Muhammad Fatur Rahman",
            "nrp" => "243040094",
            "email" => "FATUR.243040094@mail.unpas.ac.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "nabila.jpg"
        ],[
            "nama" => "Almira Alfia Suparya Putri",
            "nrp" => "243040097",
            "email" => "ALMIRA.243040097@mail.unpas.ac.id",
            "jurusan" => "Teknik Informatika",
            "gambar" => "nabila.jpg"
        ],
    ];
    ?>

    <h1>Daftar Mahasiswa</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>NAMA    : <?= $mhs["nama"]; ?></li>
            <li>NRP     : <?= $mhs["nrp"]; ?></li>
            <li>EMAIL   : <?= $mhs["email"]; ?></li>
            <li>JURUSAN : <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>

    <h1>Daftar Mahasiswa TIF C</h1>

    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NRP : <?= $mhs["nrp"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>

</body>
</html>