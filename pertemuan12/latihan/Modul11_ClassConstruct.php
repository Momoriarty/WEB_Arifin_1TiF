<?php
include "Modul11_MatakuliahClass.php";
include "../../db/koneksi.php";
class MatakuliahTampil
{
    public $mk_nama;
    public $mk_kode;
    public $mk_dosen;
    function __construct($id)
    {
        include "../../db/koneksi.php";
        $query = mysqli_query($db, "SELECT * FROM matakuliah WHERE mk_id = '$id'");
        $mk = mysqli_fetch_object($query);
        $matakuliah = new Matakuliah;
        $matakuliah->setMk_nama($mk->mk_nama);
        $matakuliah->setMk_kode($mk->mk_kode);
        $matakuliah->setMk_dosen($mk->mk_dosen);


        $this->mk_nama = $matakuliah->getMk_nama();
        $this->mk_kode = $matakuliah->getMk_kode();
        $this->mk_dosen = $matakuliah->getMk_dosen();
    }
}
$mk = new MatakuliahTampil(2);
print "Nama Mk: " . $mk->mk_nama . "<br />";
print "Kode Mk: " . $mk->mk_kode . "<br />";
print "Dosen Mk: " . $mk->mk_dosen . "<br />";
?>