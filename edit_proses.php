<?php
if(isset($_POST['edit'])){
    include("database.php");

    $id=$_POST['id'];
    $nim=$_POST['nim'];
    $nama=$_POST['nama'];
    $fakultas=$_POST['fakultas'];
    $jurusan=$_POST['jurusan'];
    $ipk=(float)$_POST['ipk'];

    $query = "UPDATE mahasiswa SET nim = '$nim', nama = '$nama', fakultas = '$fakultas', jurusan = '$jurusan', ipk=$ipk WHERE id = '$id'";

    $result = mysqli_query($link, $query);

    if(!$result) {
        die ("Query gagal di jalankan: " .mysqli_errno($link). " - " .mysqli_error($link));
    }
}

header("location:index.php")
?>