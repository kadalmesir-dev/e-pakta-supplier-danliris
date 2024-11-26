<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persyaratan K3 dan Lingkungan</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background: white;
            width: 90%;
            max-width: 800px;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            line-height: 1.6;
        }
        h1 {
            font-size: 24px;
            color: #0043A4;
            text-align: center;
            margin-bottom: 20px;
        }
        p, ul {
            font-size: 14px;
            color: #333;
        }
        ul {
            padding-left: 20px;
        }
        ul li {
            margin-bottom: 10px;
        }
        .form-group {
            margin-top: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .form-group input[type="checkbox"] {
            margin: 0;
            transform: scale(1.2); /* Membuat checkbox lebih besar */
        }
            .form-group label {
            font-size: 12px;  /* Ukuran font lebih kecil */
        }
        .form-actions {
            display: flex;
            justify-content: center; /* Memposisikan tombol di tengah */
            margin-top: 30px;
        }
        .form-actions button {
            background: #0043A4;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            opacity: 0.6;
            pointer-events: none; /* Disable button by default */
        }
        .form-actions button:enabled {
            opacity: 1;
            pointer-events: all; /* Enable button when checkbox is checked */
        }
    </style>
    <script>
        function toggleSubmitButton() {
            const checkbox = document.getElementById('agreeCheckbox');
            const submitButton = document.getElementById('submitButton');
            submitButton.disabled = !checkbox.checked;
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Kesanggupan Persyaratan K3 dan Lingkungan</h1>
        <p>Sehubungan dengan diberlakukannya program Sistem Manajemen K3 dan Lingkungan sesuai dengan standar ISO 14001:2015 di PT Dan Liris, maka terdapat beberapa hal yang ditetapkan dan diberlakukan oleh pihak perusahaan, yaitu:</p>
        <ul>
            <li>Supplier wajib mengelola material kimia yang dibawa ke area PT Dan Liris dengan cara sebagai berikut:
                <ul>
                    <li>Menyediakan Lembar Keselamatan Bahan atau Material Safety Data Sheet (MSDS).</li>
                    <li>Memberikan Label dan simbol B3 pada kemasan material yang mengandung B3.</li>
                    <li>Memastikan penanganan dan penataan material yang benar untuk mencegah kebocoran, tumpahan dan kerusakan.</li>
                </ul>
            </li>
            <li>Supplier wajib mengelola sampah dari kegiatan supplier dengan cara sebagai berikut:
                <ul>
                    <li>Membuang sampah pada tempatnya.</li>
                    <li>Tidak membawa kemasan yang berlebih.</li>
                    <li>Sebisa mungkin diambil kembali dari area lingkungan PT Dan Liris sampah-sampah B3 yang dihasilkan supplier.</li>
                </ul>
            </li>
            <li>Mematikan mesin kendaraan saat bongkar muat dan parkir.</li>
            <li>Memastikan kendaraan sudah melalui uji emisi dan memenuhi standar baku (untuk supplier jasa angkutan).</li>
            <li>Tidak merokok di area PT Dan Liris kecuali di area yang telah ditentukan.</li>
            <li>Tidak mencuci kendaraan di area PT Dan Liris.</li>
            <li>Mematuhi peraturan keselamatan dan kesehatan kerja yang berlaku di lingkungan PT Dan Liris.</li>
            <li>Menggunakan Alat Pelindung Diri (APD) ketika memasuki area yang ditentukan.</li>
            <li>Mengikuti prosedur tanggap darurat yang ditetapkan perusahaan.</li>
            <li>Menjaga kebersihan, mencegah pencemaran dan memelihara kelestarian lingkungan di area PT Dan Liris.</li>
        </ul>
        <form action="pernyataan.php" method="post">
            <div class="form-group">
                <input type="checkbox" id="agreeCheckbox" onclick="toggleSubmitButton()">
                <label for="agreeCheckbox">Saya menyetujui persyaratan di atas</label>
            </div>
            <div class="form-actions">
                <button type="submit" id="submitButton" disabled>Lanjut</button>
            </div>
        </form>
    </div>
</body>
</html>
