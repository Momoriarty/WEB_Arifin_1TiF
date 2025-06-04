<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penilaian</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <form action="hasil.php" method="post" class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold text-center text-blue-600 mb-6">Form Penilaian Mahasiswa</h2>

        <div class="mb-5">
            <label for="nama" class="block mb-2 text-sm font-medium text-gray-700">Nama</label>
            <input type="text" id="nama" name="nama"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                required />
        </div>

        <div class="mb-5">
            <label for="nim" class="block mb-2 text-sm font-medium text-gray-700">NIM</label>
            <input type="number" id="nim" name="nim"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                required />
        </div>

        <div class="mb-6">
            <label for="nilai" class="block mb-2 text-sm font-medium text-gray-700">Nilai</label>
            <select id="nilai" name="nilai"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <?php for ($i = 0; $i <= 100; $i += 10): ?>
                    <option value="<?= $i ?>"><?= $i ?></option>
                <?php endfor; ?>
            </select>
        </div>

        <button type="submit"
            class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
            Submit
        </button>
    </form>
</body>

</html>