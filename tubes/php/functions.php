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

    $nama = htmlspecialchars($data['nama_makanan']);
    $asal = htmlspecialchars($data['asal_makanan']);
    $rasa = htmlspecialchars($data['rasa_makanan']);
    $harga = htmlspecialchars($data['harga_makanan']);
    $jumlah = htmlspecialchars($data['jumlah_makanan']);
    $gambar = htmlspecialchars($data['gambar_makanan']);

    $query = "INSERT INTO makanan
                    VALUES
                    (null, '$nama', '$asal', '$rasa', $harga, $jumlah, '$gambar')";
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
    $nama = htmlspecialchars($data['nama_makanan']);
    $asal = htmlspecialchars($data['asal_makanan']);
    $rasa = htmlspecialchars($data['rasa_makanan']);
    $harga = htmlspecialchars($data['harga_makanan']);
    $jumlah = htmlspecialchars($data['jumlah_makanan']);
    $gambar = htmlspecialchars($data['gambar_makanan']);

    $query = "UPDATE makanan
              SET
                nama_makanan = '$nama', 
                asal_makanan = '$asal', 
                rasa_makanan = '$rasa', 
                harga_makanan = $harga, 
                jumlah_makanan = $jumlah,
                gambar_makanan = '$gambar'
                WHERE id = $id
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

// registrasi
function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data['username']));
    $password = mysqli_real_escape_string($conn, $data['password']);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('username sudah digunakan');
              </script>";
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah user baru
    $query_tambah = "INSERT INTO user VALUES(null, '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
