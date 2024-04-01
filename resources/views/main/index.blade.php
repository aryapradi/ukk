<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ArtFolio</title>

    <!-- Perbaikan link CSS -->
    <link rel="stylesheet" href="assets/css/beranda.css">
    <!-- Perbaikan link CSS untuk icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>


<style>
    .navbar a,
    .logo {
        text-decoration: none; /* Remove underline */
    }
</style>

<body>

    <nav> 
        <a href="#" class="logo"></i><span>ArtFolio</span></a>

        <ul class="navbar " style="margin-top: 17px">
            <li><a href="{{ url('/jelajahi') }}">Jelajahi</a></li>
            <li><a href="Jelajahi">About us</a></li>
        </ul>

        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Cari...">
            <i class="ri-search-line search-icon" style="color: white"></i>
            <!-- Icon close ditambahkan di sini -->
            <i class="ri-close-circle-line close-icon"></i>
        </div>
        
        <div class="dropdown">
            <div><i class="bx bx-user" style="font-size: 28px; color:white; margin-top:10px"></i></div>
            <div class="dropdown-content">
                <a href="{{ url('/profile') }}">Profile</a>
                <a href="{{ url('/login') }}">Masuk</a>
                <a href="{{ url('/register') }}">Daftar</a>
            </div>
        </div>
    </nav>

    <div class="body2">
        <div class="gambar">
            <img src="assets/images/lukisan.jpeg" alt="Deskripsi gambar">
            <div class="image-text" style="user-select: none">Lets Find !</div>
        </div>
     
        <div class="image-overlay" style="user-select: none">
            <p class="overlay-text">Mencari  </p>
            <div class="tengah">
                <p class="misah"> Referensi Gambar </p>
            </div>
        </div>
     
        <div class="tombol">
            <a href="{{ url('/jelajahi') }}" class="btn btn-danger">Jelajahi</a>
        </div>

        <hr style="margin-top: 250px; color:aliceblue; ">
    </div>

    <div class="body3">
        <div class="image-overlay3"  style="user-select: none">
            <p class="overlay-text3" style="padding-top: 100px">Mencari  </p>
            <div class="tengah3">
                <p class="misah3"> Referensi Gambar </p>
            </div>
        </div>
    
        <div class="tombol">
            <a href="{{ url('/jelajahi') }}" class="btn btn-danger">Jelajahi</a>
        </div>
    </div>

    <script>
        // Mendapatkan elemen input dan ikon close
        const searchInput = document.getElementById('searchInput');
        const closeIcon = document.querySelector('.close-icon');
        const searchIcon = document.querySelector('.search-icon');

        // Menambahkan event listener untuk input
        searchInput.addEventListener('input', function() {
            // Jika nilai input kosong, tampilkan ikon search, jika tidak sembunyikan
            if (this.value === '') {
                closeIcon.style.display = 'none';
                searchIcon.style.display = 'block';
            } else {
                closeIcon.style.display = 'block';
                searchIcon.style.display = 'none';
            }
        });

        // Menambahkan event listener untuk ikon close
        closeIcon.addEventListener('click', function() {
            // Kosongkan nilai input dan sembunyikan ikon close
            searchInput.value = '';
            closeIcon.style.display = 'none';
            searchIcon.style.display = 'block'; // Tampilkan ikon search kembali
        });
    </script>
</body>
</html>
