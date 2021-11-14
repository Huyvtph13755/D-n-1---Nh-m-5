<?php
    function loadall_user(){
        $sql = "select*from user order by user_id desc";
        $s=exeQuery($sql, true);
        return $s;
    }
    function insert_user($fullname, $email, $password){
        $sql="insert into user(fullname, email, password, address, contract_number, role) values('$fullname', '$email', '$password', '', '', '')";
        return exeQuery($sql, false);

    }
    function checkuser($fullname, $password){
        $sql = "select*from user where fullname='".$fullname."' AND password='".$password."'";
        $s=exeQuery($sql, false);
        return $s;
    }
    function checkemail($email){
        $sql = "select*from user where email='".$email."'";
        $s=exeQuery($sql, false);
        return $s;
    }
    function update_user($user_id,$fullname, $password,$email,$tell,$address){
        $sql="update user set fullname='".$fullname."', password='".$password."', email='".$email."', tell='".$tell."', address='".$address."' where user_id=".$user_id;
        return exeQuery($sql);
    }
?>
<!-- Phần đăng ký tài khoản -->