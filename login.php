<!DOCTYPE html>
<html>
<head>
    <title>Đăng nhập</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style_login.css">
</head>
<body>
    <div class="container">
        <h2>Đăng nhập</h2>
        
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <form action="login_process.php" method="post">
            <div class="form-group">
                <label for="username">Tên đăng nhập</label>
                <input type="text" id="username" name="username" required 
                       placeholder="Nhập tên đăng nhập">
            </div>

            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" id="password" name="password" required
                       placeholder="Nhập mật khẩu">
                <div class="forgot-password">
                    <a href="forgot-password.php">Quên mật khẩu?</a>
                </div>
            </div>

            <button type="submit">Đăng nhập</button>
        </form>
        <p class="register-link">Chưa có tài khoản? <a href="register.php">Đăng ký</a></p>
    </div>
</body>
</html>