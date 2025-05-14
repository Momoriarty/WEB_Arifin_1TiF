<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $nama = "Arifin";
    $nim = "2455301030";
    $kelas = "1 Ti F";

    $umur = 19;

    $kalimat = "Saya sedang belajar PHP";

    echo "Nama : " . $nama . "<br>";
    echo "Nim : " . $nim . "<br>";
    echo "Kelas : " . $kelas . "<br>";
    echo "Umur : " . $nama . "<br><br>";

    echo $kalimat . "<br><br>";

    echo "- Manipulasi String <br>";
    print strtoupper($kalimat) . "<br>";
    print strtolower($kalimat) . "<br>";
    print ucfirst($kalimat) . "<br>";
    print ucwords($kalimat) . "<br><br>";

    echo "Umur Saya 5 Tahun lagi : " . $umur + 5;
    ?>
</body>

</html>