<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Nama : <?= $_POST["nama"]; ?></h1>
    <h1>Kelas : <?= $_POST["kelas"]; ?></h1>
    <h1>Nim : <?= $_POST["nim"]; ?></h1>
    <h1>nilai : <?= $_POST["nilai"]; ?></h1>
    <?php if ($_POST["nilai"] > 50) {
        $status = "Sukses";
    } else {
        $status = "Tidak Sukses";
    }
    ?>
    <h1>Status : <?= $status ?> </h1>

</body>

</html>