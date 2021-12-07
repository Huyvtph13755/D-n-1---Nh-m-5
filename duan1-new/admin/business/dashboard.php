<?php
function dashboard_index()
{
    if (isset($_SESSION['email']) && $_SESSION['email']['role'] >= 1 && $_SESSION['email']['status'] == 0) {
        $sql = "SELECT COUNT(product_id) as sl FROM product";
        $a = exeQuery($sql, false);
        $sql1 = "SELECT COUNT(user_id) as slu FROM user";
        $b = exeQuery($sql1, false);
        admin_render(
            'dashboard/index.php',
            compact('a', 'b')
        );
    }elseif (isset($_SESSION['email']) && $_SESSION['email']['role'] >= 1 && $_SESSION['email']['status'] == 1){
        header("location: " . BASE_URL. "?msg=Tài khoản của bạn đã bị khóa");
    }else {
        header("location: " . BASE_URL);
    }
}
