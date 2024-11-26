<?php
session_start();

// Tangkap data dari form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['company_name'] = $_POST['company_name'];
    $_SESSION['company_type'] = $_POST['company_type'];
}

// Ambil data dari session untuk ditampilkan
$company_name = isset($_SESSION['company_name']) ? $_SESSION['company_name'] : 'Tidak Ada Nama Perusahaan';
$company_type = isset($_SESSION['company_type']) ? $_SESSION['company_type'] : 'Tidak Ada Jenis Perusahaan';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Perusahaan</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f3f4f6;
        }

        .container {
            background: white;
            width: 90%;
            max-width: 900px;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
            color: #0043A4;
        }

        form {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-group label {
            font-weight: 600;
            margin-bottom: 5px;
            font-size: 14px;
            color: #333;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            padding: 10px;
            font-size: 14px;
            border: 2px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: #0043A4;
            outline: none;
            background-color: #fff;
        }

        .form-group textarea {
            resize: vertical;
        }

        .full-width {
            grid-column: span 2;
        }

        .submit-button {
            grid-column: span 2;
            display: flex;
            justify-content: center;
        }

        .submit-button button {
            background: #0043A4;
            color: white;
            padding: 12px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            max-width: 300px;
        }

        .submit-button button:hover {
            background: #003682;
        }

        /* Responsif untuk layar ponsel */
        @media (max-width: 768px) {
            form {
                grid-template-columns: 1fr;
            }

            .full-width {
                grid-column: span 1;
            }

            .submit-button {
                grid-column: span 1;
            }

            .submit-button button {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Formulir Perusahaan</h1>
        <form action="k3_persyaratan.php" method="POST">
            <div class="form-group">
                <label for="company_name">Nama Perusahaan</label>
                <input type="text" name="company_name" value="<?= htmlspecialchars($company_name) ?>" required>
            </div>
            <div class="form-group">
            <label for="company_type">Jenis Perusahaan:</label>
               <select id="company_type" name="company_type" required>
                <option value="" disabled <?= empty($company_type) ? 'selected' : '' ?>>Pilih Jenis Perusahaan</option>
                <option value="PT" <?= $company_type === 'PT' ? 'selected' : '' ?>>PT</option>
                <option value="CV" <?= $company_type === 'CV' ? 'selected' : '' ?>>CV</option>
                <option value="Perorangan" <?= $company_type === 'Perorangan' ? 'selected' : '' ?>>Perorangan</option>
            </select><br>
            </div>
            <div class="form-group">
                <label for="address">Alamat</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="phone">Telepon</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="fax">Fax</label>
                <input type="text" id="fax" name="fax">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="website">Website</label>
                <input type="text" id="website" name="website">
            </div>
            <div class="form-group">
                <label for="year">Tahun Berdiri</label>
                <input type="number" id="year" name="year" required>
            </div>
            <div class="form-group">
                <label for="owner">Owner</label>
                <input type="text" id="owner" name="owner" required>
            </div>
            <div class="form-group">
                <label for="responsible_person">Penanggung Jawab</label>
                <input type="text" id="responsible_person" name="responsible_person" required>
            </div>
            <div class="form-group">
                <label for="npwp">NPWP</label>
                <input type="text" id="npwp" name="npwp">
            </div>
            <div class="form-group">
                <label for="bank">Bank</label>
                <input type="text" id="bank" name="bank">
            </div>
            <div class="form-group">
                <label for="bank_account">Nomor Bank</label>
                <input type="text" id="bank_account" name="bank_account">
            </div>
            <div class="form-group">
                <label for="workers">Jumlah Pekerja</label>
                <input type="number" id="workers" name="workers" required>
            </div>
            <div class="form-group">
                <label for="area">Luas Area (m²)</label>
                <input type="number" id="area" name="area" required>
            </div>
            <div class="form-group full-width">
                <label for="specialization">Spesialisasi Produk</label>
                <input type="text" id="specialization" name="specialization" required>
            </div>
            <div class="form-group full-width">
                <label for="production_capacity">Kapasitas Produksi</label>
                <input type="text" id="production_capacity" name="production_capacity">
            </div>
            <div class="form-group">
                <label for="machines">Jumlah Mesin</label>
                <input type="number" id="machines" name="machines">
            </div>
            <div class="form-group full-width">
                <label for="history">Sejarah Perusahaan</label>
                <textarea id="history" name="history" rows="5"></textarea>
            </div>
            <div class="submit-button">
                <button type="submit">Lanjut</button>
            </div>
        </form>
    </div>
</body>
</html>
