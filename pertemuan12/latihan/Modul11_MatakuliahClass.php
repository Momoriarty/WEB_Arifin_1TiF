<?php
class Matakuliah
{
    var $mk_nama;
    var $mk_kode;
    var $mk_dosen;
    function setMk_nama($mk_nama)
    {
        $this->mk_nama = $mk_nama;
    }
    function getMk_nama()
    {
        return $this->mk_nama;
    }
    function setMk_kode($mk_kode)
    {
        $this->mk_kode = $mk_kode;
    }
    function getMk_kode()
    {
        return $this->mk_kode;
    }
    function setMk_dosen($mk_dosen)
    {
        $this->mk_dosen = $mk_dosen;
    }
    function getMk_dosen()
    {
        return $this->mk_dosen;
    }
}
?>