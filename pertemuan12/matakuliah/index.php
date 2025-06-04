<?php include('../../db/koneksi.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Matakuliah</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <?php
    $i = 1;
    $query = "SELECT * FROM matakuliah";
    $conn = mysqli_query($db, $query);
    ?>

    <div class="p-6">

        <div class="flex justify-between items-center w-8/12 mx-auto mb-4">
            <h1 class="text-xl font-semibold text-gray-700">Daftar Mata Kuliah</h1>
            <a href="../matakuliah/FormAdd.php"
                class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700 transition duration-200 text-sm font-medium">
                + Tambah Mata Kuliah
            </a>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-8/12 mx-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th class="px-6 py-3">No</th>
                        <th class="px-6 py-3">Nama Mata Kuliah</th>
                        <th class="px-6 py-3">Kode</th>
                        <th class="px-6 py-3">Dosen</th>
                        <th class="px-6 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($m = mysqli_fetch_array($conn)) { ?>
                        <tr class="bg-white border-b">
                            <td class="px-6 py-4"><?= $i++ ?></td>
                            <td class="px-6 py-4"><?= $m['mk_nama'] ?></td>
                            <td class="px-6 py-4"><?= $m['mk_kode'] ?></td>
                            <td class="px-6 py-4"><?= $m['mk_dosen'] ?></td>
                            <td class="px-6 py-4 space-x-2">
                                <a href="../matakuliah/FormEdit.php?mk_id=<?= $m['mk_id'] ?>"
                                    class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    Edit
                                </a>
                                <a href="../latihan/Modul11_MatakuliahDeleteDB.php?mk_id=<?= $m['mk_id'] ?>"
                                    class="text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    Hapus
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>

</body>

</html>