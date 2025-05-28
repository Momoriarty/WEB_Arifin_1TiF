<?php include('../db/koneksi.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mata Kuliah</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <div class="flex justify-center items-center min-h-screen">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Tambah Mata Kuliah</h2>
            <form method="POST" action="../controller/Matakuliah.php?aksi=insert">
                <input type="hidden" name="aksi" value="insert">

                <div class="mb-4">
                    <label class="block text-gray-700">Nama Mata Kuliah</label>
                    <input type="text" name="mk_nama" required
                        class="w-full px-4 py-2 mt-1 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Kode Mata Kuliah</label>
                    <input type="text" name="mk_kode" required
                        class="w-full px-4 py-2 mt-1 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700">Nama Dosen</label>
                    <input type="text" name="mk_dosen" required
                        class="w-full px-4 py-2 mt-1 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
                </div>

                <div class="flex justify-between">
                    <a href="index.php" class="text-blue-600 hover:underline text-sm flex items-center">← Kembali</a>
                    <button type="submit"
                        class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition duration-200">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>