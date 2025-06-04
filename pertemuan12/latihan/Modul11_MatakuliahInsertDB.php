<?php
include "Modul11_ClassMatakuliahDB.php";
$mk_nama = $_POST['mk_nama'];
$mk_kode = $_POST['mk_kode'];
$mk_dosen = $_POST['mk_dosen'];
$insert = new MatakuliahDB;
$insert->InsertMatakuliah($mk_nama, $mk_kode, $mk_dosen);
header('location: ../matakuliah/index.php');
?>