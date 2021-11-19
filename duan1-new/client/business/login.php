<?php
function login(){
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $sql = "select*from user where email='".$email."' AND password='".$password."'";
        $s=exeQuery($sql, false);
        if (is_array($s)) {
            $_SESSION['email'] = $s;
            header('location: home?msg=Đăng nhập thành công');
        } else {
            header('location: login?msg=Tài khoản hoặc mật khẩu không chính xác');
        }
    }
    client_render('login/index.php');
}
function logout(){
    session_unset();
    header('location: home?msg=Bạn đã đăng xuất');
}
?>