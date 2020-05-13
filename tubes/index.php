<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';

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
    <link rel="stylesheet" href="css/style.css">
    <title>Daftar Makanan</title>
</head>

<body>

    <div class="jumbotron jumbotron-fluid pt-0">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Daftar Makanan</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav ml-auto">

                        <a class="nav-item btn btn-danger" href="php/login.php">
                            Login
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container mt-5 text-light">
            <div class="row">
                <h1 class="display-4 mx-auto">Cari Makanan Favorit Anda</h1>
                <p class="lead mx-auto">------------------------Datang - Cicipi - Nambah lagi-------------------------</p>
                <form class="form-inline mr-2 mt-3t mx-auto" action="">
                    <input class="form-control mr-sm-2" type="search" size="40" placeholder="Makanan favorit anda?" aria-label="Search" name="keyword">
                    <button class="btn btn-warning my-2 my-sm-0" style="width: 100px" type="submit" name="cari">Cari</button>
                </form>
            </div>

        </div>
    </div>

    <div class="container">
        <?php if (empty($makanan)) : ?>
            <h3 class="text-danger">Makanan pencarian tidak ditemukan!</h3>
        <?php endif; ?></td>
        <div class="row">
            <?php foreach ($makanan as $m) : ?>
                <div class="col-md-3 mb-3">
                    <div class="">
                        <img src="assets/img/<?= $m['gambar_makanan'] ?>" class="card-img-top" alt="..." height="200">
                        <div class="card-body">
                            <h5 class="card-title"> <?= $m['nama_makanan'] ?></h5>
                            <a href="php/detail.php?id=<?= $m['id'] ?>" class="btn btn-warning stretched-link"><?= $m['harga_makanan'] ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>