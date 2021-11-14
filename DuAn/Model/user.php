<?php
    function loadall_user(){
        $sql = "select*from user order by id desc";
        $s=exeQuery($sql, true);
        return $s;
    }
    function insert_user($fullname, $email, $password){
        $sql="insert into user(fullname, email, password) values('$fullname', '$email', '$password')";
        return exeQuery($sql, false);
    }
    function checkuser($email, $password){
        $sql = "select*from user where email='".$email."' AND password='".$password."'";
        $s=exeQuery($sql, false);
        return $s;
    }
    function update_user($user_id,$fullname, $password,$email,$contract_number,$address){
        $sql="update user set fullname='".$fullname."', password='".$password."', email='".$email."', contract_number='".$contract_number."', address='".$address."' where user_id=".$user_id;
        return exeQuery($sql, true);
    }
?>
