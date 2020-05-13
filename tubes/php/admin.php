<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("loaction: login.php");
  exit;
}
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $makanan = query(
    "SELECT * FROM makanan WHERE
        nama_makanan LIKE '%$keyword%' OR
        asal_makanan LIKE '%$keyword%' OR
        rasa_makanan LIKE '%$keyword%' "
  );
} else {
  $makanan = query("SELECT * FROM makanan");
}

?>


<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <title>Daftar Makanan</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Daftar Makanan</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">

          <a class="nav-item btn btn-danger" href="logout.php">
            Logout
          </a>
        </div>
      </div>
    </div>
  </nav>


  <div class="container">
    <form class="form-inline mr-2 mt-3 float-right" action="">
      <input class="form-control mr-sm-2" type="search" size="60" placeholder="Search" aria-label="Search" name="keyword">
      <button class="btn btn-outline-warning my-2 my-sm-0" type="submit" name="cari">Cari</button>
    </form>
    <a class="btn btn-warning mb-3 mt-3" href="tambah.php">Tambah Data</a>
    <table class="table ">
      <thead class="bg-warning">
        <tr>
          <th>No</th>
          <th>Opsi</th>
          <th>Gambar</th>
          <th>Nama</th>
          <th>Asal</th>
          <th>Jumlah</th>
          <th>Rasa</th>
          <th>Harga</th>
        </tr>
      </thead>
      <tbody>
        <?php if (empty($makanan)) : ?>
          <tr>
            <td colspan="8">
              <h3 class="text-danger">Makanan pencarian tidak ditemukan!</h3>
          </tr>
        <?php endif; ?></td>
        <?php $i = 1 ?>
        <?php foreach ($makanan as $m) : ?>
          <tr>
            <td class="no"><?= $i ?></td>
            <td class="opsi">
              <a class="btn btn-warning" href="ubah.php?id=<?= $m['id']; ?>">Ubah</a>
              <a class="btn btn-danger" href="hapus.php?id=<?= $m['id']; ?>" onclick="return confirm('Hapus Data?')">Hapus</a> </td>
            <td><img src="../assets/img/<?= $m['gambar_makanan']; ?>" width="200px"></td>
            <td><?= $m["nama_makanan"]; ?></td>
            <td><?= $m["asal_makanan"]; ?></td>
            <td><?= $m["jumlah_makanan"]; ?></td>
            <td><?= $m["rasa_makanan"]; ?></td>
            <td><?= $m["harga_makanan"]; ?></td>
          </tr>
          <?php $i++; ?>
        <?php endforeach; ?>
      </tbody>
    </table>

  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>