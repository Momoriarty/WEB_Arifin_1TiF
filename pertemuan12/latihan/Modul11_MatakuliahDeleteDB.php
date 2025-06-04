<?php
include('../latihan/Modul11_ClassMatakuliahDB.php');
$id = $_GET['mk_id'];
$Matakuliah = new MatakuliahDB;
$Matakuliah->HapusMatakuliah($id);
header('location: ../Matakuliah/index.php');
?>