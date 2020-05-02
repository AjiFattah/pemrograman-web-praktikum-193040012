<?php
require 'functions.php';

$makanan = query("SELECT * FROM makanan");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>latihan6b_193040012</title>

  <style>
    table {
      background: white;
    }

    img {
      width: 100px;
      height: 100px;
      border: 2px solid black;
    }

    th {
      background:grey;
    }

    button {
      background: grey;
      color: black;
      font-size: medium;
    }
  </style>

</head>

<body>
  <table border="1" cellpadding="13" cellspacing="0">
    <tr>
      <th>Gambar</th>
      <th>Nama Makanan</th>
      <th>Asal Makanan</th>
      <th>rasa Makanan</th>
      <th>Harga</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach ($makanan as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td>
          <a href=""><button>Ubah</button></a>
          <a href=""><button>Hapus</button></a>
        </td>
        <td><img src="../assets/img/<?= $m['gambar']; ?>"></td>
        <td><?= $m['nama makanan']; ?></td>
        <td><?= $m['asal']; ?></td>
        <td><?= $m['rasa']; ?></td>
        <td><?= $m['harga']; ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>