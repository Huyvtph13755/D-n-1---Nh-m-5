<?php
function cart(){
    if(isset($_SESSION['email'])){
        $user_id = $_SESSION['email']['user_id'];

        // lấy dữ liệu từ giỏ hàng
        $sql = "SELECT cart.cart_id, product.name_product, product.price_default, color.price_add, color.name_color, warranty.price, cart.quantity, cart.total_price, warranty.name_warranty
        FROM (((duan1.cart
        INNER JOIN duan1.product ON cart.product_id = product.product_id)
        INNER JOIN duan1.color ON cart.color_id = color.color_id)
        INNER JOIN duan1.warranty ON cart.warranty_id = warranty.warranty_id) WHERE cart.user_id = '$user_id'
        ";
        $a = exeQuery($sql, true);

        // lấy tổng giá của toàn bộ giỏ hàng
        $sql1 = "SELECT SUM(total_price) as total FROM cart WHERE user_id = '$user_id'";
        $b = exeQuery($sql1, false);
        client_render('cart/index.php', compact('a', 'b'));

        // xóa sản phẩm trong giỏ hàng
        /*code*/
        
    }else{
        header('Location:home');
    }
    
}

?>