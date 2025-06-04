<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-100 py-10">
    <?php
    include "../../db/koneksi.php";
    $mhsid = $_GET['id'];
    $query = mysqli_query($db, "SELECT * FROM mahasiswa WHERE ID = '$mhsid'");
    $m = mysqli_fetch_object($query);
    ?>

    <div class="max-w-xl mx-auto bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-6 text-gray-800">Edit Data Mahasiswa</h2>
        <form method="post" action="../percobaan/Modul11_MahasiswaUpdateDB.php?aksi=update&id=<?= $m->id ?>" class="space-y-4">
            <div>
                <label class="block text-gray-700 mb-1">Nama</label>
                <input type="text" name="nama" value="<?= $m->nama; ?>" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <div>
                <label class="block text-gray-700 mb-1">NIM</label>
                <input type="text" name="nim" value="<?= $m->nim; ?>" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <div>
                <label class="block text-gray-700 mb-1">Kelas</label>
                <input type="text" name="kelas" value="<?= $m->kelas; ?>" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>

            <div>
                <label class="block text-gray-700 mb-1">Username</label>
                <input type="text" name="username" value="<?= $m->username; ?>" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>
            <div>
                <label class="block text-gray-700 mb-1">Password</label>
                <input type="text" name="password" value="<?= $m->password; ?>" required
                    class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>
            <div>
                <input type="submit" value="Save"
                    class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300" />
            </div>
        </form>
    </div>
</body>

</html>