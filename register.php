<!DOCTYPE html>
<html>
<head>
    <title>Đăng ký thành viên</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_regis.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Đăng ký thành viên</h2>

        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <form action="register_process.php" method="post">
            <div class="form-group">
                <label for="username">Tên đăng nhập</label>
                <input type="text" id="username" name="username" required 
                       placeholder="Nhập tên đăng nhập">
            </div>

            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" id="password" name="password" required
                       placeholder="Nhập mật khẩu">
            </div>

            <div class="form-group">
                <label for="confirm_password">Xác nhận mật khẩu</label>
                <input type="password" id="confirm_password" name="confirm_password" required
                       placeholder="Nhập lại mật khẩu">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required
                       placeholder="Nhập địa chỉ email">
            </div>

            <div class="form-group">
                <label for="fullname">Họ và tên</label>
                <input type="text" id="fullname" name="fullname"
                       placeholder="Nhập họ và tên">
            </div>

            <button type="submit">Đăng ký</button>
        </form>
        <p class="login-link">Đã có tài khoản? <a href="login.php">Đăng nhập</a></p>
    </div>
</body>
</html>