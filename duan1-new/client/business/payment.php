<?php

function check(){
    $user_id = $_SESSION['email']['user_id'];
    $sql111 = "SELECT * FROM user WHERE user_id = '$user_id'";
    $u = exeQuery($sql111, false);
    client_render('checkout/index.php', compact('u'));
}
function order(){
    // $fullname = $_POST['fullname'];
    // $contract_number = $_POST['contract_number'];
    // $shipping_address = $_POST['address'];
    // $email = $_POST['email'];
    client_render('checkout/order-view.php');
}
