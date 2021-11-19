<?php
function getProduct(){
    $sql = "SELECT  product.product_id, product.name_product, color.product_id, color.color_id, color.price, color.name_color FROM duan1.product, duan1.color WHERE product.product_id = color.product_id ORDER BY color.quantity ASC limit 12";
    $s = exeQuery($sql, true);
    $sql1 = "SELECT  product.product_id, product.name_product, color.product_id, color.color_id, color.price, color.name_color FROM duan1.product, duan1.color WHERE product.product_id = color.product_id ORDER BY product.post_date DESC limit 8";
    $a = exeQuery($sql1, true);
    client_render('home/index.php', compact('s', 'a'));
}

?>