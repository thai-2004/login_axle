<?php
session_start();
if(!isset($_SESSION['looggined'])){
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title id ="text-container">Axle</title>
    <link rel="stylesheet" href="style_welcome.css">
</head>
<body>
    <div id = "intro">
    <span id = "intro-text"></span>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <!-- Khởi tạo Particles.js -->
    <script>
      particlesJS.load('intro', 'particles.json', function() {
        console.log('Particles.js loaded');
      });
    </script>
    </div>

    <div id="container">
        <header id='header', class='fixed-top d-flex justify-content-center align-items-center header-transparent'>
            <nav id = 'navbar', class="navbar">
                <ul>
                    <li><a href="welcome.php">Trang chủ</a></li>
                    <li><a href="profile.php">Trang cá nhân</a></li>
                    <li><a href="logout.php">Đăng xuất</a></li>
                </ul>
            </nav>
            </div>
        </header>
    </div>
    <script src="intro.js"></script>
    <script src="print.js"></script>
</body>
</html>