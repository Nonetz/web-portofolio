<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Nanotech.ID</title>
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
        max-width: 600px; /* Maksimum lebar kontainer */
        margin: 20px auto;
        padding: 20px;
        background-color: rgba(255, 255, 255, 0.8); /* Warna latar belakang konten dengan transparansi */
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        color: #333; /* Warna teks */
        text-align: center; /* Posisi teks di tengah */
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
        .content p {
            line-height: 1.6;
            text-align: center; /* Menjadikan teks rata tengah */
        }
        .profile-img {
            width: 300px; /* Ukuran lebar gambar */
            height: auto; /* Tinggi otomatis sesuai dengan rasio asli */
            margin: 0 auto 10px; /* Margin bawah 10px, dan auto di sisi kanan dan kiri untuk pemosisian di tengah */
            display: block; /* Agar gambar berada di tengah */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Efek bayangan pada gambar */
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
        <img src="foto nano.jpg" alt="Foto Anda" class="profile-img">
        <h1>Selamat Datang di Profil Saya</h1>
    </header>

    <section class="content">
        <p>Selamat datang di website pribadi saya.</p>
        <p> Di sini Anda dapat menemukan informasi mengenai pendidikan saya</p>
        <P>Sepetrti jadwal kuliah, dan aktivitas yang pernah saya ikuti.</p>
    </section>
</div>

</body>
</html>
