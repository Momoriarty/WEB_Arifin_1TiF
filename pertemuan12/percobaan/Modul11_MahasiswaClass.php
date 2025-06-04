<?php
class Mahasiswa
{
    var $nama;
    var $nim;
    var $kelas;
    function setNama($nama)
    {
        $this->nama = $nama;
    }
    function getNama()
    {
        return $this->nama;
    }
    function setNim($nim)
    {
        $this->nim = $nim;
    }
    function getNim()
    {
        return $this->nim;
    }
    function setKelas($kls)
    {
        $this->kelas = $kls;
    }
    function getKelas()
    {
        return $this->kelas;
    }
}
?>