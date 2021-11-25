<?php

function dashboard_index(){
    $sql = "SELECT COUNT(product_id) as sl FROM product";
    $a = exeQuery($sql, false);
    $sql1 = "SELECT COUNT(user_id) as slu FROM user";
    $b = exeQuery($sql1, false);
    admin_render('dashboard/index.php', 
        compact('a', 'b')); 
}


?>