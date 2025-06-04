<?php
class MatakuliahDB
{
    function TampilSemua()
    {
        include "../../db/koneksi.php";
        $query = mysqli_query($db, "SELECT * FROM matakuliah");
        $i = 0;
        while ($d = mysqli_fetch_array($query)) {
            $i++;
            $data[$i]['mk_name'] = $d['mk_name'];
            $data[$i]['mk_kode'] = $d['mk_kode'];
            $data[$i]['mk_dosen'] = $d['mk_dosen'];
        }
        return $data;
    }
    function InsertMatakuliah($mk_nama, $mk_kode, $mk_dosen)
    {
        include "../../db/koneksi.php";
        $pass = md5($password);
        $query = mysqli_query($db, "INSERT INTO matakuliah(mk_nama,mk_kode,mk_dosen) VALUES('$mk_nama','$mk_kode','$mk_dosen')");
    }
    function UpdateMatakuliah($id, $mk_nama, $mk_kode, $mk_dosen)
    {
        include "../../db/koneksi.php";
        $pass = md5($password);
        mysqli_query($db, "UPDATE matakuliah SET mk_nama = '$mk_nama', mk_kode = '$mk_kode', mk_dosen = '$mk_dosen' WHERE mk_id = '$id'");

    }
    function HapusMatakuliah($id)
    {
        include "../../db/koneksi.php";
        mysqli_query($db, "DELETE FROM matakuliah WHERE mk_id = '$id'");
    }
}
?>