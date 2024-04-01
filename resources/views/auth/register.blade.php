<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            height: 100%;
        }
        .container {
            display: flex;
            height: 100%;
        }
        .left {
            flex: 1;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            position: relative;
        }
        .left img {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }
        .left img.active {
            opacity: 1;
        }
        .right {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #1B1E1F;
        }
        .login-container {
            width: 320px;
            padding: 40px;
            background-color: #181A1B;
            border-radius: 10px;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.5); /* Efek bayangan */
            text-align: center;
        }
        .login-container h2 {
            margin-bottom: 30px;
            color: #fff;
        }
        .login-container input[type="text"], 
        .login-container input[type="password"] {
            width: 300px;
            padding: 15px;
            margin: 10px 0;
            color: #181A1B;
            border: 2px solid #3B3B3B;
            border-radius: 5px;
            outline: none;
            transition: border-color 0.3s ease;
        }
        .login-container input[type="text"]:focus, 
        .login-container input[type="password"]:focus {
            border-color: #D98173;
        }
        .login-container .password-toggle-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #797063;
            z-index: 1; /* Memastikan ikon tetap di atas input */
        }
        .login-container .password-toggle-icon:hover {
            color: #D98173;
        }
        .login-container .btn {
            width: 100px;
            margin-left: 234px;
            padding: 10px;
            background-color: #DC3545;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: #fff;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        .login-container .btn:hover {
            background-color: #fff;
            color: black
        }
    </style>
    
</head>
<body>
    <div class="container">
        <div class="left">
            <img class="active" src="assets/images/lukisan.jpeg" alt="Image 1">
            <img src="assets/images/gedung.jpeg" alt="Image 2">
            <img src="assets/images/sunset.jpeg" alt="Image 3">
        </div>
        <div class="right">
            <div class="login-container">
                <h2 style="margin-left: -254px">Daftar</h2>
                <h5 style="margin-left: -145px; margin-top:-20px; color:white" >Sudah Punya Akun ? <a href="{{ url('/login') }}" style="text-decoration:none; color:#DC3545;">Masuk</a></h5>
                <hr>
                <form action="#" method="post">
                    <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required>
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="text" name="email" placeholder="Email" required>
                    <div style="position: relative;">
                        <input type="password" name="password" placeholder="Password" required>
                        <!-- Toggle icon for password visibility -->
                        <i class="fas fa-eye-slash password-toggle-icon" onclick="togglePasswordVisibility()"></i>
                    </div>
                    <button type="submit" class="btn">Go</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        var images = document.querySelectorAll('.left img');
        var currentIndex = 0;
        var interval = setInterval(changeBackground, 5000);

        function changeBackground() {
            images[currentIndex].classList.remove('active');
            currentIndex = (currentIndex + 1) % images.length;
            images[currentIndex].classList.add('active');
        }

        function togglePasswordVisibility() {
            var passwordInput = document.querySelector('input[name="password"]');
            var icon = document.querySelector('.password-toggle-icon');

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            } else {
                passwordInput.type = "password";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            }
        }
    </script>
</body>
</html>
