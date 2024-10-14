<?php
$host = 'localhost';
$user = 'root';
$password = '';
$name = 'db_crud';
$link = mysqli_connect($host,$user,$password,$name);

if(!$link){
    die("Koneksi dengan database gagal:" .mysqli_connect_errno().
    " - " .mysqli_connect_error());
}
?>