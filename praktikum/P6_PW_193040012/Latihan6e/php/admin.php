<?php
require 'functions.php';

$makanan = query("SELECT * FROM makanan");

// ketika tombol cari diklik
if (isset($_POST['cari'])) {
    $makanan = cari($_POST['keyword']);
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>latihan6d_193040012</title>

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

<div class="add">
    <a href="tambah.php"><button>Tambah Data</button></a>
  </div>
  <br>

  <form action="" method="POST">
    <input type="text" name="keyword" size="40" placeholder="masukan keyword pencarian.." autocomplete="off" autofocus>
    <button type="submit" name="cari">Cari!</button>
  </form>
  <br>

  <table border="1" cellpadding="13" cellspacing="0">
    <tr>
      <th>Gambar</th>
      <th>Nama Makanan</th>
      <th>Asal Makanan</th>
      <th>rasa Makanan</th>
      <th>Harga</th>
    </tr>

    <?php if (empty($makanan)) : ?>
      <tr>
        <td colspan="7">
          <h1 style="color: red; font-style: italic;">Data tidak ditemukan</h1>
        </td>
      </tr>
    <?php endif; ?>

    <?php $i = 1; ?>
    <?php foreach ($makanan as $m) : ?>
      <tr>
        <td><?= $i++; ?></td>
        <td>
          <a href=""><button>Ubah</button></a>
          <a href="hapus.php?id=<?= $m['id']; ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
        </td>
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