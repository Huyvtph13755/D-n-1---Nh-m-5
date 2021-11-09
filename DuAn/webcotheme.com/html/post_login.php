<!-- Vân Anh code -->
<?php
session_start();
require_once './db.php';
$user = $_POST['user'];
$mat_khau_dang_nhap = $_POST['mat_khau_dang_nhap'];
$errors = "";
if(strlen($mat_khau_dang_nhap)<6){
    $errors .= "mat_khau_dang_nhap-err=Mật khẩu phải có ít nhất 6 kí tự&";
}
if(strlen($user)<5){
    $errors .= "user-err=Tài khoản phải có ít nhất 5 kí tự&";
}

$errors = rtrim($errors, '&');

if(strlen($errors) > 0){
    header('location: login.php?' . $errors);
    die;
}
$getKhByUserQuery = "select * from khach_hang where user = '$user'";
$khach_hang = exeQuery($getKhByUserQuery, false);
if($khach_hang){
    if(password_verify($mat_khau_dang_nhap, $khach_hang['mat_khau_dang_nhap'])){
        $_SESSION['auth'] = [
            'ma_khach_hang' => $khach_hang['ma_khach_hang'],
            'user' => $khach_hang['user'],
            'ho_va_ten' => $khach_hang['ho_va_ten'],
            'hinh_anh' => $khach_hang['hinh_anh'],
            'email' => $khach_hang['email'],
            'vai_tro' => $khach_hang['vai_tro']

        ];
        header('location: home.php?msg=Đăng nhập thành công');
        die;
    }
    header('location: login.php?msg=Tài khoản hoặc mật khẩu không đúng');
    die;

}

header('location: login.php?msg=User không tồn tại');
?> 