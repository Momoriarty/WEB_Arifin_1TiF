<?php
include "Modul11_ClassMahasiswaDB.php";
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$kelas = $_POST['kelas'];
$username = $_POST['username'];
$password = $_POST['password'];
$insert = new MahasiswaDB;
$insert->InsertMahasiswa($nama, $nim, $kelas, $username, $password);
header('location: ../mahasiswa/index.php');
?>