<?php
    session_start();

    if (!isset($_SESSION["admin"])) {
        header("Location: login.php");
        exit;
    }

    if (isset($_GET["logout"])) {
        session_destroy();
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <style>
        body {
            background-image: url('gambaradmin.jpeg');
            font-family: Arial, sans-serif;
            background-size: cover; 
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333;
        }

        p {
            color: #666;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat Datang di Website Bilker!</h1>
        <p>Haiii perkenalkan saya billy wicaksono saya merupakan mahasiswa semester 2 teknik informatika universitas pasundan.</p>
        <button id="logoutButton">Logout</button>
    </div>

    <script>
        document.getElementById('logoutButton').addEventListener('click', function() {
            if (confirm('Apakah Anda yakin ingin logout?')) {
                window.location.href = 'admin.php?logout=true';
            }
        });
    </script>
</body>
</html>