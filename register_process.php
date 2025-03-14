<?php
require_once 'config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);

    // kiem tra du lieu dau vao
    if($password != $confirm_password){
        header("Location: register.php?error=Mật khẩu không khớp");
        exit();
    }

    // ma hoa mat khau

    $hash_password = password_hash($password, PASSWORD_DEFAULT);

    //kiem tra user va email ton tai chua
     $sql_check_user = "SELECT * FROM users WHERE username = '$username' OR email = '$email'";
     $result_check_user = mysqli_query($conn, $sql_check_user);
     if(mysqli_num_rows($result_check_user) > 0){
        header("Location: register.php?error=Tên đăng nhập đã tồn tại hoặc email đã tồn tại");
        exit();
     }
     
    // them nguoi dung vao database
    $sql = "INSERT INTO users (username, password, email, fullname) VALUES ('$username', '$hash_password', '$email', '$fullname')";
    if(mysqli_query($conn, $sql)){
        header("Location: login.php?success=Đăng ký thành công");
        exit();
    }else{
        header("Location: register.php?error=Đăng ký thất bại");
        exit();
    }


    // kiem tra email hop le
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: register.php?error=Email không hợp lệ");
        exit();
    }
    mysqli_close($conn);
}else{

    // neu khong phai post thi chuyen huong ve trang dang ky
    header("Location: register.php");
    exit();
}
?> 
