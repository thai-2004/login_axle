<?php
session_start(); // bat dau session
require_once 'config.php'; // ket noi database
if (!$conn) {
    die("Lỗi kết nối database: " . mysqli_connect_error());
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];
    $sql = "SELECT id, password FROM users WHERE username = '$username'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['password'])){

            //dang nhap thanh cong
            $_SESSION['looggined'] = true;
            $_SESSION['username'] = $username;
            header("Location: welcome.php"); // chuyen huong den trang welcome.php
            exit();
        }else{
            header("Location: login.php?error=Sai mật khẩu");
            exit();
        }
    }else{
        // tai khoan khong ton tai
        header("Location: login.php?error=Tài khoản không tồn tại");
        exit();
    }
    }else{
    // neu khong phai post thi chuyen huong ve trang dang nhap
    header("Location: login.php");
    exit();
    }

    mysqli_close($conn);


?>