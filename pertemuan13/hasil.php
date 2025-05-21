<?php
$nama = $_POST["nama"] ?? '';
$error = '';

if (preg_match('/[0-9]/', $nama)) {
    $error = '
  <div id="errorModal" class="fixed top-10 left-1/2 transform -translate-x-1/2 bg-white rounded-lg shadow-lg max-w-md w-full p-6 z-50 border border-red-400">
  <h2 class="text-2xl font-bold mb-3 text-red-600">Error!</h2>
  <p class="mb-4 text-gray-800">Nama tidak boleh mengandung angka.</p>
  <button onclick="history.back()" class="mt-2 px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700 focus:outline-none">
    Kembali
  </button>
</div>


    <script>
      function closeModal() {
        document.getElementById("errorModal").style.display = "none";
      }
    </script>
    ';
}



$nim = $_POST["nim"] ?? '';
$nilai = $_POST["nilai"] ?? '';

if ($nilai >= 90) {
    $grade = "A";
} elseif ($nilai >= 80) {
    $grade = "B";
} elseif ($nilai >= 70) {
    $grade = "C";
} elseif ($nilai >= 60) {
    $grade = "D";
} else {
    $grade = "E";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Hasil Penilaian</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen flex items-center justify-center px-4">
    <?php
    if ($error) {
        echo $error;
        die();
    } ?>
    <div class="bg-white p-10 rounded-3xl shadow-2xl max-w-lg w-full border border-gray-200">
        <h1 class="text-3xl font-extrabold text-center text-indigo-700 mb-8 tracking-wide">Hasil Penilaian</h1>

        <div class="space-y-6">
            <div class="flex justify-between items-center border-b border-gray-200 pb-3">
                <span class="text-gray-500 font-medium">Nama</span>
                <span class="text-gray-900 font-semibold text-lg"><?= htmlspecialchars($nama) ?></span>
            </div>
            <div class="flex justify-between items-center border-b border-gray-200 pb-3">
                <span class="text-gray-500 font-medium">NIM</span>
                <span class="text-gray-900 font-semibold text-lg"><?= htmlspecialchars($nim) ?></span>
            </div>
            <div class="flex justify-between items-center border-b border-gray-200 pb-3">
                <span class="text-gray-500 font-medium">Nilai</span>
                <span class="text-gray-900 font-semibold text-lg"><?= htmlspecialchars($nilai) ?></span>
            </div>
            <div class="flex justify-between items-center">
                <span class="text-gray-500 font-medium">Grade</span>
                <span class="text-white font-bold px-4 py-2 rounded-full
                    <?php
                    switch ($grade) {
                        case 'A':
                            echo 'bg-green-600';
                            break;
                        case 'B':
                            echo 'bg-lime-600';
                            break;
                        case 'C':
                            echo 'bg-yellow-400 text-gray-900';
                            break;
                        case 'D':
                            echo 'bg-orange-500';
                            break;
                        default:
                            echo 'bg-red-600';
                            break;
                    }
                    ?>">
                    <?= $grade ?>
                </span>
            </div>
        </div>
    </div>
</body>

</html>