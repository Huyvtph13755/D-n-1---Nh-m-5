<?php
// function load4product(){
//     $sql = "SELECT * FROM product ORDER BY view DESC LIMIT 0,9";
//     $s = exeQuery($sql, true); //Truy vấn nhiều sp
// }

// Code của Huy
// lấy 1 sản phẩm theo id
function product_detail($id){
    $sql = "SELECT * FROM product WHERE product_id = $id";
    $s = exeQuery($sql, false);
    return $s;
}
// lấy random 6 sản phẩm
function getRanPr(){
    $sql = "SELECT * FROM product ORDER BY RAND() LIMIT 6";
    $s = exeQuery($sql, true);
    return $s;
}

// End code của Huy



























































