<?php
function register(){
    if (isset($_POST['register'])) {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $sql="insert into user(fullname, email, password, address, contract_number, role) values('$fullname', '$email', '$password', '', '', '')";
        exeQuery($sql, false);
        header('location: register?msg=Đăng kí thành công');
    }
    client_render('register/index.php');
}


?>