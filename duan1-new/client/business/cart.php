<?php
function cart(){
    if(isset($_SESSION['email'])){
        $user_id = $_SESSION['email']['user_id'];
        $sql = "SELECT cart.cart_id, product.name_product, color.name_color, warranty.price, cart.quantity, cart.price
        FROM ((((duan1.cart
        INNER JOIN duan1.product ON cart.product_id = product.product_id)
        INNER JOIN duan1.user ON cart.user_id = '$user_id')
        INNER JOIN duan1.color ON cart.color_id = color.color_id)
        INNER JOIN duan1.warranty ON cart.warranty_id = warranty.warranty_id);
        ";
        $a = exeQuery($sql, true);
    }
    client_render('cart/index.php', compact('a'));
}

?>