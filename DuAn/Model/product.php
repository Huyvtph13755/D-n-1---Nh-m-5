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
echo "Hoàng";
function sql(){
    $sql = "SELECT * FROM category WHERE category_id";
    $s = exeQuery($sql, true);
    return $s;
}
echo "Product";
echo "Product1";
// End code của Huy



























































