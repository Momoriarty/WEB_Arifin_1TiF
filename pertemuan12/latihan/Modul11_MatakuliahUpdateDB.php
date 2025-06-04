<?php
include "Modul11_ClassMatakuliahDB.php";
$id = $_GET['mk_id'];
$mk_nama = $_POST['mk_nama'];
$mk_kode = $_POST['mk_kode'];
$mk_dosen = $_POST['mk_dosen'];
$update = new MatakuliahDB;
$update->UpdateMatakuliah($id,$mk_nama, $mk_kode, $mk_dosen);
header('location: ../matakuliah/index.php');
?>