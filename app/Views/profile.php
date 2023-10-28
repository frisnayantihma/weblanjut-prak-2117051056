<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            background-color: #f7f7f7; /* Warna latar belakang */
            font-family: Arial, sans-serif;
        }

        .profile-card {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 50px;
            background-color: #fff; /* Warna latar belakang kartu profil */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Bayangan kartu profil */
            border-radius: 10px; /* Sudut bulat kartu profil */
            padding: 20px;
            text-align: center;
        }
        .img {
    background-image: url(/profile/IMG/ine.jpg);
    filter: brightness(0.8);
    background-color: #454846;
    background-size: cover;
    border-radius: 100px;
    width: 150px;
    height: 150px;
    margin-left: 20px;
    text-align: center;
}

        .profile-picture {
          /* background-image: url(/profile/IMG/ine.jpg); */
            width: 150px;
            height: 150px;
            background-color: #ddd; /* Warna latar belakang foto profil */
            border-radius: 100%;  /*Untuk membuatnya menjadi lingkaran */
            background-size: cover;
            margin: 0 auto; 
            margin-bottom: 20px;
            line-height: 150px;
            font-size: 48px; /* Ukuran teks di dalam lingkaran */
            color: #000; /* Warna teks di dalam lingkaran */
        }

        .profile-info {
            font-size: 18px;
            color: #333; /* Warna teks informasi */
            margin-bottom: 10px;
        }

        .profile-info span {
            font-weight: bold;
            color: #000; /* Warna teks informasi tambahan */
        }
    </style>
</head>
<body>
    <div class="profile-card">
        <div class="profile-picture">
            <img src="<?= $user['foto'] ?? '<default-foto>' ?>" width="100%" height="100%" alt="">
            <i class="fas fa-user"></i> <!-- Gunakan ikon profil Font Awesome di sini -->
        </div>
        <div class="profile-info">
            <?= $user['nama'] ?>
        </div>
        <div class="profile-info">
            <?= $user['nama_kelas'] ?>
        </div>
        <div class="profile-info">
            <?= $user['npm'] ?>
        </div>
    </div>
</body>
</html>