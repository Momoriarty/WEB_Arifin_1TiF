<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>

<body>

    <?php
    $nama = "Arifin";
    $umur = 19;

    function cekUmur($umur, $nama)
    {
        if ($umur >= 25) {
            return $nama . " Masih Tua";
        } else {
            return $nama . " Masih Muda";
        }
    }

    $hasil = cekUmur($umur, $nama)
        ?>

    <div class="grid grid-cols-3">
        <img src="https://picsum.photos/100/100" alt="">
        <h1><?= $hasil ?></h1>
    </div>
</body>

</html>