<?php
include 'database.php';

if(isset($_POST['input'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $fakultas = $_POST['fakultas'];
    $jurusan = $_POST['jurusan'];
    $ipk = $_POST['ipk'];

    $query = "INSERT INTO mahasiswa VALUES (NULL, '$nim', '$nama', '$fakultas', '$jurusan', '$ipk')";
    $result = mysqli_query($link, $query);
    if (!$result){
        die("Query gagal dijalankan: " .mysqli_errno($link)
        . " - " .mysqli_error($link));
    }
}

header("location:index.php");
?>