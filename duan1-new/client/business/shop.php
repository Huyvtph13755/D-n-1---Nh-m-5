<?php
function shop()
{
if(isset($_GET['category_id'])){
        $category_id = $_GET['category_id'];
        // lấy 8sp lượt xem nhiều nhất
        $sql = "SELECT product.product_id, product.name_product, product.price_default, product.image_product
        FROM (duan1.product
        INNER JOIN duan1.subcategory ON product.subcategory_id = subcategory.subcategory_id) WHERE subcategory.category_id = '$category_id' 
        ";
        $s = exeQuery($sql, true);
    
        // lấy 8sp mới nhất
        $sql1 = "SELECT  * FROM subcategory WHERE category_id = '$category_id'";
        $a = exeQuery($sql1, true);
        if(isset($_GET['subcategory_id'])){
            $subcategory_id = $_GET['subcategory_id'];
            $sql = "SELECT * FROM product WHERE subcategory_id = '$subcategory_id'";
            $s = exeQuery($sql, true);
        }
        $sql2 = "SELECT * FROM category WHERE category_id = '$category_id'";
        $b = exeQuery($sql2, false);
        client_render('shop/index.php', compact('s', 'a', 'b'));
}
}
?>