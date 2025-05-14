<?php

function ubahHariKeIndonesia($hariInggris)
{
    $hariIndonesia = [
        'Sunday' => 'Minggu',
        'Monday' => 'Senin',
        'Tuesday' => 'Selasa',
        'Wednesday' => 'Rabu',
        'Thursday' => 'Kamis',
        'Friday' => 'Jumat',
        'Saturday' => 'Sabtu'
    ];

    return $hariIndonesia[$hariInggris] ?? 'Hari tidak dikenal';
}

echo ubahHariKeIndonesia('Saturday');
