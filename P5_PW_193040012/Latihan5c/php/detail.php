<?php
if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require 'functions.php';

$id = $_GET['id'];

$makanan = query("SELECT * from makanan where id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan5c</title>
        <style>
            .container {
                border : 3px solid #4B0082; 
                background-color: #9370DB; 
                width: 170px;
                height : 270px;
                margin : auto;
                padding : 20px 0 20px 0;
                text-align: center;
                font-family: arial;
                font-size: medium;
            }
            img {
                border : 2px solid #4B0082; 
                width : 100px;
                height : 70px;
            }
            button:link, a:link {
                color : #0000CD; 
            }
            button:hover, a:hover {
                text-decoration: none;
                color : #48D1CC; 
            }
            button:active, a:active {
                text-decoration: none;
            }
    </style>

</head>
<body>
    <div class = "container">
        <div class="gambar">
            <img src="../assets/img/<?= $mkn["gambar"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p><?= $mkn ["nama makanan"]; ?></p>
            <p><?= $mkn ["asal"]; ?></p>
            <p><?= $mkn ["rasa"]; ?></p>
            <p><?= $mkn ["harga"]; ?></p>
        </div>
        <button class = "tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>
</html>