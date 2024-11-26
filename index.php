<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
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

/* Membatasi lebar kontainer */
.container {
    display: flex;
    background: white;
    width: 100%;
    max-width: 700px;  /* Mengurangi lebar maksimal untuk tampilan lebih kecil */
    border-radius: 12px;  /* Radius yang lebih kecil untuk desain lebih minimalis */
    overflow: hidden;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    box-sizing: border-box;
}

/* Bagian kiri */
.left {
    background: #0043A4;
    color: white;
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 10px;  /* Mengurangi padding untuk bagian kiri */
}
/* Memperbesar gambar dan memberikan rounded corners */
.left img {
    width: 100%; /* Memperbesar gambar agar lebih besar */
    max-width: 350px; /* Membatasi ukuran maksimal gambar */
    border-radius: 15px; /* Memberikan efek rounded pada ujung gambar */
    margin-bottom: 5px; /* Memberikan jarak bawah */
}
/* Menurunkan dan mengecilkan teks "DanlirisGroup" */
.left h1 {
    font-size: 22px;  /* Menurunkan ukuran font */
    margin-bottom: 15px;  /* Memberikan jarak bawah */
    margin-top: 20px;  /* Menambahkan jarak atas untuk menurunkan teks */
}
/* Mengecilkan teks "by" */
.left p {
        font-size: 12px;         /* Ukuran font */
        line-height: 1.0;        /* Tinggi baris */
        margin-top: 1px;        /* Tambahkan jarak atas */
        margin-bottom: 0;        /* Hilangkan jarak bawah */
}
/* Styling logo */
.logo {
    display: flex;
    justify-content: center; /* Posisikan di tengah */
    margin-bottom: 20px; /* Jarak antara logo dan teks */
}
.logo img {
    width: 60px; /* Ukuran logo */
    height: auto; /* Menjaga proporsi logo */
    border-radius: 10px; /* Ujung logo membulat */
}
/* Menurunkan teks "Hello, Again" */
.right h2 {
    font-size: 24px;
    margin-bottom: 5px;
    color: #333;
    margin-top: 20px; /* Menambahkan jarak atas untuk menurunkan teks */
}
/* Bagian kanan */
.right {
    flex: 1;
    padding: 30px;  /* Menurunkan padding untuk bagian kanan */
    display: flex;
    flex-direction: column;
    justify-content: center;
}

/* Input dan Select dengan lebar penuh */
.form-group input, .form-group select {
    width: 100%;
    padding: 8px;
    font-size: 13px;  /* Menurunkan ukuran font untuk elemen input dan select */
    border: 2px solid #ccc;
    border-radius: 4px;  /* Radius yang lebih kecil untuk tampilan lebih sederhana */
    background-color: #f9f9f9;
    box-sizing: border-box;
}

/* Mengatasi jarak di dropdown */
.form-group select {
    padding-left: 8px;
    margin-left: 0;
}

/* Container untuk form-group */
.form-group {
    display: flex;
    flex-direction: column;
    width: 100%;
    margin-bottom: 10px;  /* Menambah jarak antara form-group */
}

/* Tombol dengan lebar penuh */
.button {
    background: #0043A4;
    color: white;
    padding: 10px 15px;  /* Mengurangi padding tombol */
    border: none;
    border-radius: 4px;  /* Radius lebih kecil untuk tombol */
    cursor: pointer;
    font-size: 14px;  /* Mengurangi ukuran font tombol */
    width: 100%;
    max-width: 250px;  /* Membatasi lebar tombol */
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
}

.button:hover {
    background: #003682;
}

/* Media query untuk tampilan mobile */
@media (max-width: 600px) {
    .container {
        flex-direction: column;  /* Menata kontainer lebih vertikal di mobile */
        width: 90%;  /* Membatasi lebar kontainer lebih kecil */
        padding: 10px;
    }

    .left {
        padding: 10px;
    }

    .right {
        padding: 15px;
    }

    .left img {
        max-width: 150px;  /* Menurunkan ukuran gambar di perangkat mobile */
    }

    .button {
        max-width: 220px;  /* Menyesuaikan ukuran tombol di perangkat mobile */
    }
}

    </style>
</head>
<body>
    <div class="container">
        <div class="left">
            <img src="https://th.bing.com/th/id/R.09386e8f68f4c18a774b34fc504707af?rik=QUGMaDICQyasTQ&riu=http%3a%2f%2fefrataretailindo.gbgindonesia.com%2fwp-content%2fuploads%2f2021%2f03%2fdan-liris.jpg&ehk=1D4OZ3wpVQo7bjc%2by%2fN%2f%2bADz%2bWTuiya%2br3K%2feBzW3AU%3d&risl=&pid=ImgRaw&r=0" alt="Verification">
            <h1>DanlirisGroup</h1>
            <p>by Digitalisasi Umum</p>
        </div>
        <div class="right">
            <h2>Hello,</h2>
            <p>E-Pakta DanlirisGroup</p>
            <form action="dashboard.php" method="post">
                <div class="form-group">
                    <input type="text" name="company_name" placeholder="Nama Perusahaan" required>
                </div>
                <div class="form-group">
                    <select name="company_type" required>
                        <option value="" disabled selected>Pilih Jenis Perusahaan</option>
                        <option value="PT">PT</option>
                        <option value="CV">CV</option>
                        <option value="Perorangan">Perorangan</option>
                    </select>
                </div>
                <button type="submit" class="button">Masuk</button>
            </form>
        </div>
    </div>
</body>
</html>
