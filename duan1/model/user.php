<?php
    function loadall_user(){
        $sql = "select*from user order by id desc";
        $s=exeQuery($sql, true);
        return $s;
    }
    function insert_user($fullname, $email, $password){
        $sql="insert into user(fullname, email, password, address, contract_number, role) values('$fullname', '$email', '$password', '', '', '')";
        return exeQuery($sql, false);

    }
    function checkuser($email, $password){
        $sql = "select*from user where email='".$email."' AND password='".$password."'";
        $s=exeQuery($sql, false);
        return $s;
    }
    function update_user($user_id, $fullname, $contract_number, $address){
        $sql="UPDATE user SET fullname = '$fullname', contract_number = '$contract_number', address = '$address' WHERE user_id = '$user_id'";
        return exeQuery($sql);
    }
    function checkuser2($id){
        $sql = "SELECT * FROM user WHERE user_id = '$id'";
        $s = exeQuery($sql,false);
        return $s;
    }
?>
<!-- Phần đăng ký tài khoản -->
 