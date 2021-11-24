<?php
function shop()
{
    // lấy 8sp lượt xem nhiều nhất
    $sql = "SELECT product.product_id, product.name_product, product.price_default
    FROM (duan1.product
    INNER JOIN duan1.subcategory ON product.subcategory_id = subcategory.subcategory_id) WHERE subcategory.category_id = 1 
    ";
    $s = exeQuery($sql, true);

    // lấy 8sp mới nhất
    $sql1 = "SELECT  * FROM subcategory WHERE category_id = 1";
    $a = exeQuery($sql1, true);
    // lấy 8sp tiêu biểu
    $sql2 = "SELECT  * FROM product ORDER BY view DESC LIMIT 8";
    $b = exeQuery($sql, true);
    client_render('shop/index.php', compact('s', 'a', 'b'));
}
?>