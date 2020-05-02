<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukan query
$makanan = query("SELECT * FROM makanan");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan6a_193040012</title>

    <style>
        .container {
            border: 4px solid #191970;
           
            background-color: salmon;

            width: 300px;
            height: 300px;
            margin: auto;
            padding: 30px 0 20px 20px;
            font-family: arial;
            font-size: x-large;
        }

        a:link {
            color: #0000CD;
            /* medium blue */
        }

        a:hover {
            text-decoration: none;
            color: #FFFF00;
            /* yellow */
        }

        a:active {
            text-decoration: none;
        }
    </style>

</head>

<body>
    <h1>
        <center>DAFTAR MAKANAN</center>
    </h1>
    <div class="container">
        <?php foreach ($makanan as $mkn) : ?>
            <div class="nama">
                <a href="php/detail.php?id=<?= $mkn['id']; ?>">
                    <?= $mkn["nama"]; ?>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
    <h1>
        <center>TERIMAKASIH BANG!</center>
    </h1>
</body>

</html>