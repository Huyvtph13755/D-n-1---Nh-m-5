<?php
function dashboard_index(){
if(isset($_SESSION['email']) && $_SESSION['email']['role']>=1){   
    $sql = "SELECT COUNT(product_id) as sl FROM product";
    $a = exeQuery($sql, false);
    $sql1 = "SELECT COUNT(user_id) as slu FROM user";
    $b = exeQuery($sql1, false);
    admin_render('dashboard/index.php', 
        compact('a', 'b')); 
}
header("location: " . BASE_URL);
}
