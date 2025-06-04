<?php
include('../percobaan/Modul11_ClassMahasiswaDB.php');
$id = $_GET['id'];
$mahasiswa = new MahasiswaDB;
$mahasiswa->HapusMahasiswa($id);
header('location: ../mahasiswa/index.php');
?>