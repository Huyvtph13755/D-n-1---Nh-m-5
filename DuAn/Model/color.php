<?php
// Code của Huy
// Lấy hết dữ liệu của bảng color
function full_color($product_id){
    $sql = "SELECT * FROM color WHERE product_id = '$product_id' ORDER BY price ASC";
    return exeQuery($sql, true);
    
}
// Lấy giá nhỏ nhất
function getMinPrice($id){
    $colors = "SELECT MIN(price) as pr FROM color WHERE product_id = 1";
    $clr = exeQuery($colors, false);
    return $clr;
}
// End code của Huy
?>