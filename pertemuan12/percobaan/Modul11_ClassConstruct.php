<?php
include "Modul11_MahasiswaClass.php";
include "../../db/koneksi.php";
class MahasiswaTampil
{
    public $nama;
    public $nim;
    public $kelas;
    function __construct($id)
    {
        include "../../db/koneksi.php";
        $query = mysqli_query($db, "SELECT * FROM mahasiswa WHERE id = '$id'");

        $mhs = mysqli_fetch_object($query);
        $mahasiswa = new Mahasiswa;
        $mahasiswa->setNama($mhs->nama);
        $mahasiswa->setKelas($mhs->kelas);
        $mahasiswa->setNim($mhs->nim);


        $this->nama = $mahasiswa->getNama();
        $this->kelas = $mahasiswa->getKelas();
        $this->nim = $mahasiswa->getNim();
    }
}
$mhs = new MahasiswaTampil(9);
print "Nama: " . $mhs->nama . "<br />";
print "NIM: " . $mhs->nim . "<br />";
print "Kelas: " . $mhs->kelas . "<br />";
?>