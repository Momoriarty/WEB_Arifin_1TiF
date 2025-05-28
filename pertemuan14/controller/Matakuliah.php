<?php
include "../db/koneksi.php";

$aksi = $_GET['aksi'];
$id = isset($_GET['mk_id']) ? $_GET['mk_id'] : null;

if ($aksi == "insert") {
    $nama = $_POST['mk_nama'];
    $kode = $_POST['mk_kode'];
    $dosen = $_POST['mk_dosen'];

    if (!empty($nama) && !empty($kode) && !empty($dosen)) {
        mysqli_query($db, "INSERT INTO matakuliah (mk_nama, mk_kode, mk_dosen) VALUES ('$nama', '$kode', '$dosen')");
        header('location:../matakuliah/index.php');
    } else {
        header('location:../matakuliah/FormAdd.php');
    }

} elseif ($aksi == "update") {
    $nama = $_POST['mk_nama'];
    $kode = $_POST['mk_kode'];
    $dosen = $_POST['mk_dosen'];

    mysqli_query($db, "UPDATE matakuliah SET mk_nama = '$nama', mk_kode = '$kode', mk_dosen = '$dosen' WHERE mk_id = '$id'");
    header('location:../matakuliah/index.php');

} elseif ($aksi == "delete") {
    mysqli_query($db, "DELETE FROM matakuliah WHERE mk_id = '$id'");
    header('location:../matakuliah/index.php');
}
?>