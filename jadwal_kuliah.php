<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Kuliah - Nanotech.ID</title>
    <style>
        /* CSS untuk styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0; /* Warna background untuk halaman */
            background-image: url('background2.jpeg'); /* Gambar latar belakang */
            background-size: cover; /* Memastikan gambar latar belakang mengisi seluruh area */
            background-position: center
        }
        .navbar {
            background-color: #333; /* Warna latar belakang navbar */
            padding: 10px 0;
            text-align: center;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            margin: 0 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        .navbar a:hover {
            background-color: #555; /* Warna background saat hover */
        }
        .container {
            width: 80%;
            max-width: 800px; /* Maksimum lebar kontainer */
            margin: 20px auto;
            padding: 20px;
            background-color: #fff; /* Warna latar belakang konten */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: #333; /* Warna teks */
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .content {
            margin-bottom: 20px;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 5px;
        }
        .content h2 {
            margin-top: 0;
            margin-bottom: 10px;
        }
        .content table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .content table th, .content table td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }
        .content table th {
            background-color: #f2f2f2;
        }
        .content table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .content table tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="dashboard.php">Home</a>
    <a href="pendidikan.php">Pendidikan</a>
    <a href="jadwal_kuliah.php">Jadwal Kuliah</a>
    <a href="aktivitas.php">Aktivitas</a>
</div>

<div class="container">
    <header>
        <h1>Selamat Datang di Website Saya</h1>
    </header>

    <div class="content">
        <h2>Jadwal Kuliah</h2>
        <table>
            <thead>
                <tr>
                    <th>Hari</th>
                    <th>Jam</th>
                    <th>Mata Kuliah 1</th>
                    <th>Jam</th>
                    <th>Mata Kuliah 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td rowspan="2">Senin</td>
                    <td>10:30 - 13:00</td>
                    <td>Rekayasa Perangkat Lunak</td>
                    <td>13:00 - 15:30</td>
                    <td>Pemrograman Framework</td>
                </tr>
                <tr></tr>
                <tr>
                    <td>Selasa</td>
                    <td>13:00 - 15:30</td>
                    <td>Basis Data Lanjut</td>
                    <td>15:30 - 18:00</td>
                    <td>Pemrograman Python</td>
                </tr>
                <tr>
                    <td>Rabu</td>
                    <td>08:00 - 10:30</td>
                    <td>Statistika & Probabilitas</td>
                    <td>15.30 - 18.00</td>
                    <td>Kriptografi</td>
                </tr>
                <tr>
                    <td>Kamis</td>
                    <td>08:00 - 10:30</td>
                    <td>Desain & Pemrograman Web</td>
                    <td>15:30 - 18:00</td>
                    <td>Grafika Komputer</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>
