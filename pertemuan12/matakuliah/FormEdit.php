<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Mata Kuliah</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 py-10">
    <?php
    include "../../db/koneksi.php";
    $mkid = isset($_GET['mk_id']) ? $_GET['mk_id'] : null;

    if ($mkid) {
        $query = mysqli_query($db, "SELECT * FROM matakuliah WHERE mk_id = '$mkid'");
        $mk = mysqli_fetch_object($query);
    } else {
        echo "<p class='text-center text-red-500'>ID Mata Kuliah tidak ditemukan.</p>";
        exit;
    }
    ?>

    <div class="max-w-xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-6 text-gray-800">Edit Data Mata Kuliah</h2>
        <form method="post" action="../latihan/Modul11_MatakuliahUpdateDB.php?mk_id=<?= $mk->mk_id ?>" class="space-y-4">
            <div>
                <label class="block text-gray-700 mb-1">Nama Mata Kuliah</label>
                <input type="text" name="mk_nama" value="<?= $mk->mk_nama; ?>" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <div>
                <label class="block text-gray-700 mb-1">Kode Mata Kuliah</label>
                <input type="text" name="mk_kode" value="<?= $mk->mk_kode; ?>" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <div>
                <label class="block text-gray-700 mb-1">Nama Dosen</label>
                <input type="text" name="mk_dosen" value="<?= $mk->mk_dosen; ?>" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <div>
                <input type="submit" value="Simpan"
                    class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300" />
            </div>
        </form>
    </div>
</body>

</html>