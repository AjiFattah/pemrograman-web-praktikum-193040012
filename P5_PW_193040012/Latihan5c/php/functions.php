<?php
    // function untuk melakukan koneksi ke database
    function koneksi(){
        $conn = mysqli_connect("localhost", "root", "") or die ("Koneksi ke DB gagal!");
        mysqli_select_db($conn, "tubes_193040012") or die ("Database Salah!");

        return $conn;
    }

    // function untuk melakukan query ke database
    function query($sql) {
        $conn = koneksi();
        $result = mysqli_query($conn, "$sql");

        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }
?>