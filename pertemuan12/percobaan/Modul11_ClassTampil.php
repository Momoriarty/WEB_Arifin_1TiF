<?php
include "Modul11_MahasiswaClass.php";
$mhs1 = new Mahasiswa;
$mhs1->setNama('Rolando Bianchi');
$mhs1->setKelas('1 SIC');
$mhs1->setNim('11445267');
print $mhs1->getNama() . '<br>';
print $mhs1->getNim() . '<br>';
print $mhs1->getKelas();
?>