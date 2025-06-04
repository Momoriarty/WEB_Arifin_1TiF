<?php include('../db/koneksi.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <?php
    $i = 1;
    $query = "SELECT * FROM mahasiswa";
    $conn = mysqli_query($db, $query);
    ?>

    <div class="p-6">

        <div class="flex justify-between items-center w-8/12 mx-auto mb-4">
            <h1 class="text-xl font-semibold text-gray-700">Daftar Mahasiswa</h1>
            <a href="mahasiswa/FormAdd.php"
                class="bg-blue-600 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-700 transition duration-200 text-sm font-medium">
                + Add Mahasiswa
            </a>
        </div>

        <div class="relative overflow-x-auto shadow-md sm:rounded-lg w-8/12 mx-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th class="px-6 py-3">No</th>
                        <th class="px-6 py-3">Nama</th>
                        <th class="px-6 py-3">NIM</th>
                        <th class="px-6 py-3">Kelas</th>
                        <th class="px-6 py-3">Username</th>
                        <th class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($mahasiswa = mysqli_fetch_array($conn)) { ?>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4"><?= $i++ ?></td>
                            <td class="px-6 py-4"><?= $mahasiswa['nama'] ?></td>
                            <td class="px-6 py-4"><?= $mahasiswa['nim'] ?></td>
                            <td class="px-6 py-4"><?= $mahasiswa['kelas'] ?></td>
                            <td class="px-6 py-4"><?= $mahasiswa['username'] ?></td>
                            <td class="px-6 py-4 space-x-2">
                                <a href="mahasiswa/FormEdit.php?id=<?= $mahasiswa['id'] ?>"
                                    class="text-gray-900 bg-gradient-to-r from-lime-200 via-lime-400 to-lime-500 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-lime-300 dark:focus:ring-lime-800 shadow-lg shadow-lime-500/50 dark:shadow-lg dark:shadow-lime-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    Edit
                                </a>
                                <a href="../controller/Mahasiswa.php?aksi=delete&id=<?= $mahasiswa['id'] ?>"
                                    class="text-gray-900 bg-gradient-to-r from-red-200 via-red-300 to-yellow-200 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-red-100 dark:focus:ring-red-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
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