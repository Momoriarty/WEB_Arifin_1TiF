<?php
class MahasiswaDB
{
    function TampilSemua()
    {
        include "../../db/koneksi.php";
        $query = mysqli_query($db, "SELECT * FROM mahasiswa");
        $i = 0;
        while ($d = mysqli_fetch_array($query)) {
            $i++;
            $data[$i]['name'] = $d['nama'];
            $data[$i]['nim'] = $d['nim'];
            $data[$i]['kelas'] = $d['kelas'];
        }
        return $data;
    }
    function InsertMahasiswa($nama, $nim, $kelas, $username, $password)
    {
        include "../../db/koneksi.php";
        $pass = md5($password);
        $query = mysqli_query($db, "INSERT INTO mahasiswa(nama,nim,kelas,username,password) VALUES('$nama','$nim','$kelas','$username','$pass')");
    }
    function UpdateMahasiswa($id, $nama, $nim, $kelas, $username, $password)
    {
        include "../../db/koneksi.php";
        $pass = md5($password);
        mysqli_query($db, "UPDATE mahasiswa SET nama = '$nama', nim = '$nim', kelas = '$kelas', username = '$username', password = '$pass' WHERE ID = '$id'");

    }
    function HapusMahasiswa($id)
    {
        include "../../db/koneksi.php";
        mysqli_query($db, "DELETE FROM mahasiswa WHERE ID = '$id'");
    }
}
?>