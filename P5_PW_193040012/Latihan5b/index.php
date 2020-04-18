<?php 

//menghubungkan dengan file php lainnya
require 'php/functions.php';

//melakukan query
$makanan = query("SELECT * from makanan")

?>

<html>
    <head>
        <title>T2_193040012</title>
    </head>
    <style>
        body {
            background-color: salmon;
        }
        table{
            background-color: lightblue;
            border : 1px solid black;
            text-align : center;
            font-size : 30px;
        }
    
        td{
            padding : 20px;
            
        }
        h3{
            text-align : center;
            font-size : 50px;
            color: white;
        }
        h5 a{
            text-decoration: none;
            color: white;
            font-size: 50px;
        }
    </style>
    <body>
        <h3>Makanan</h3>
        <table border="1px">
            <tr>
                <th>Gambar</th>
                <th>Nama Makanan</th>
                <th>Asal</th>
                <th>Rasa</th>
                <th>Harga</th>
            </tr>
            <?php foreach ($buku as $b) { ?>
            <tr>
                <td><img src="../img/<?= $b['photo']; ?>"></td>
                <td><?= $b["Nama Makanan"]; ?></td>
                <td><?= $b["Asal"]; ?></td>
                <td><?= $b["Rasa"]; ?></td>
                <td><?= $b["harga"]; ?></td>
            </tr>
            <?php } ?>
        </table>
		
		<h5 align="center"><a href="../../index.php">__Back__</a></h5>
    </body>
</html>