<?php
function add_product(){
    if (isset($_POST['add_product'])) {
        if (isset($_SESSION['email'])) {
            $product_id = $_GET["product_id"];
            $user_id = $_SESSION['email']['user_id'];
            $a = $_GET['a'];
            $b = $_GET['b'];
            $quantity = $_GET['qty'];
            $color_id = explode('+', $a);
            if ($b == 0) {
                $b1 = 0;
                $warranty_id = 0;
                $price = $color_id[0];
            } else {
                $b1 = explode('+', $b);
                $warranty_id = $b1[1];
                $price = $color_id[0] + $warranty_id[0];
            }
            $sql = "INSERT INTO cart(user_id, product_id, color_id, warranty_id, quantity, price) VALUES('$user_id', '$product_id', '$color_id', '$warranty_id', '$quantity', '$price')";
            exeQuery($sql, false);
            header('Location: ?msg=Thêm sản phẩm thành công');
           
        } else {
            header('Location: ?msg=Bạn chưa đăng nhập');
        }
    }
    client_render('product_detail/index.php');
}
