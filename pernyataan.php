<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pernyataan</title>
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
            font-size: 12px;  /* Ukuran font lebih kecil untuk label checkbox */
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
        .notification {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 15px;
            background-color: #4CAF50;
            color: white;
            text-align: center;
            border-radius: 5px;
            font-size: 16px;
            z-index: 9999; /* Tampilkan di atas konten lainnya */
        }
    </style>
    <script>
        function toggleSubmitButton() {
            const checkbox = document.getElementById('agreeCheckbox');
            const submitButton = document.getElementById('submitButton');
            submitButton.disabled = !checkbox.checked;
        }

        function showSuccessMessage() {
            // Tampilkan notifikasi sukses
            document.getElementById('successMessage').style.display = 'block';
            
            // Setelah 3 detik, redirect ke index.php
            setTimeout(function() {
                window.location.href = "index.php";  // Redirect ke halaman index.php
            }, 3000); // Redirect setelah 3 detik
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Pernyataan</h1>
        <p>
            Dengan ini menyatakan bahwa, <br>
            1. Sebagai rekanan PT DAN LIRIS, kami berkomitmen untuk:
        </p>
        <ul>
            <li>Tidak menawarkan dan/atau memberikan uang serta barang dalam bentuk apapun, layanan, fasilitas dan/atau bentuk imbalan apapun dengan dalih apapun juga baik langsung maupun tidak langsung kepada karyawan dan/atau yang mewakili PT DAN LIRIS diluar dari yang telah diatur dalam perjanjian kerjasama yang telah disepakati antara kedua belah pihak.</li>
            <li>Tidak menaikkan harga jual barang/jasa yang bertujuan untuk kepentingan dan/atau keuntungan pribadi karyawan dan/atau yang mewakili PT. DAN LIRIS serta menjamin bahwa harga jual barang/jasa yang diberikan murni dan telah sesuai dengan perjanjian kerja sama yang telah disepakati sebelumnya.</li>
            <li>Mematuhi semua ketentuan hukum dan etika bisnis yang berlaku serta menjaga kerahasiaan data dan informasi sesuai dengan ketentuan perjanjian kerjasama.</li>
        </ul>
        <p>
            2. Jika dikemudian hari terdapat indikasi dan/atau bukti pelanggaran terhadap pernyataan ini, maka pihak kami siap menerima segala konsekuensi yang berlaku baik dalam bentuk pembatalan kerjasama, tuntutan sejumlah denda yang besarnya ditentukan secara sepihak oleh PT. DAN LIRIS sebagai kompensasi atas kerugian perusahaan dan sanksi lainnya sesuai dengan ketentuan hukum yang berlaku.
        </p>
        <p>
            Demikian surat pernyataan ini dibuat dengan sebenar-benarnya dan tanpa paksaan dari pihak manapun. Surat ini sebagai bentuk komitmen kami untuk menjaga integritas kerja sama secara transparansi dan profesionalisme.
        </p>
        <form onsubmit="showSuccessMessage(); return false;">
            <div class="form-group">
                <input type="checkbox" id="agreeCheckbox" onclick="toggleSubmitButton()">
                <label for="agreeCheckbox">Saya menyetujui pernyataan di atas</label>
            </div>
            <div class="form-actions">
                <button type="submit" id="submitButton" disabled>Submit</button>
            </div>
        </form>
        <div id="successMessage" class="notification">
            Data berhasil dikirim!
        </div>
    </div>
</body>
</html>
