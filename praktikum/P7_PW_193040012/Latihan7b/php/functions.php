<?php
// function untuk melakukan koneksi ke database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "") or die("Koneksi ke DB gagal!");
    mysqli_select_db($conn, "tubes_193040012") or die("Database Salah!");

    return $conn;
}

// function untuk melakukan query ke database
function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// fungsi untuk menambahkan data didalam database
function tambah($data)
{
    $conn = koneksi();

    $gambar = htmlspecialchars($data['gambar']);
    $nama = htmlspecialchars($data['nama']);
    $asal = htmlspecialchars($data['asal']);
    $rasa = htmlspecialchars($data['rasa']);
    $harga = htmlspecialchars($data['harga']);

    $query = "INSERT INTO makanan
                    VALUES
                    ('', '$nama', '$asal', '$rasa', '$harga', '$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// fungsi untuk menghapus data
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM makanan WHERE id = $id");

    return mysqli_affected_rows($conn);
}

// fungsi untuk mengubah data
function ubah($data)
{
    $conn = koneksi();

    $id = htmlspecialchars($data['id']);
    $gambar = htmlspecialchars($data['gambar']);
    $nama = htmlspecialchars($data['nama']);
    $asal = htmlspecialchars($data['asal']);
    $rasa = htmlspecialchars($data['rasa']);
    $harga = htmlspecialchars($data['harga']);

    $query = "UPDATE makanan
              SET
                nama = '$nama', 
                asal = '$asal', 
                rasa = '$rasa', 
                harga = '$harga', 
                gambar = '$gambar'
                WHERE id = '$id'
                ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// cari
function cari($keyword)
{
    $conn = koneksi();

    $query = "SELECT * FROM makanan
              WHERE 
              nama LIKE '%$keyword%' OR 
              asal LIKE '%$keyword%' OR
              rasa LIKE '%$keyword%' OR
              harga LIKE '%$keyword%'
              ";
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}