<?php
include "../db/koneksi.php";

$aksi = $_GET['aksi'];
$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($aksi == "insert") {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $kelas = $_POST['kelas'];
    $user = $_POST['username'];
    $pass = md5($_POST['password']);
    if (!empty($nama) && !empty($nim) && !empty($kelas) && !empty($user) && !empty($pass)) {
        mysqli_query($db, "INSERT INTO mahasiswa(nama,nim,kelas,username,password) VALUES('$nama','$nim','$kelas','$user','$pass')");
        header('location:../mahasiswa/index.php');
    } else {
        header('location:../mahasiswa/FormAdd.php');
    }
} elseif ($aksi == "update") {

    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $kelas = $_POST['kelas'];
    $user = $_POST['username'];
    $pass = md5($_POST['password']);
    if (
        !empty($nama) && !empty($nim) && !empty($kelas) && !empty($user)
        && !empty($pass)
    ) {
        mysqli_query($db, "UPDATE mahasiswa SET nama = '$nama', nim = '$nim', kelas = '$kelas', username = '$user', password = '$pass'
        WHERE id = '$id'");
        header('location:../mahasiswa/index.php');
    } else {
        header('location:../mahasiswa/index.php');
    }

} elseif ($aksi == "delete") {
    mysqli_query($db, "DELETE FROM mahasiswa WHERE id = '$id'");
    header('location:../mahasiswa/index.php');
}

?>