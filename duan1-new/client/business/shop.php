<?php
function shop(){
    if(isset($_SESSION['email'])){
        $category_id = $_SESSION['email']['user_id'];

        // lấy dữ liệu từ giỏ hàng
        $sql = "SELECT product.product_id, product.name_product, product.price_default, color.price_add, color.name_color
        FROM (((duan1.product
        INNER JOIN duan1.subcategory ON subcategory.subcategory_id = product.product_id) WHERE subcategory.category_id = '$category_id' ORDER BY cart_id DESC.
        ";
        $a = exeQuery($sql, true);

        // lấy tổng giá của toàn bộ giỏ hàng
        $sql1 = "SELECT SUM(total_price) as total FROM cart WHERE user_id = '$category_id'";
        $b = exeQuery($sql1, false);
        client_render('shop/index.php', compact('a', 'b'));

        // xóa sản phẩm trong giỏ hàng
        /*code*/
        
    }else{
        header('Location:home');
    }
    
}

?>