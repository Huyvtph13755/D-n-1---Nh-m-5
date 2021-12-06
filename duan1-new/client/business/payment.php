<?php

function check()
{
    $user_id = $_SESSION['email']['user_id'];
    $sql111 = "SELECT * FROM user WHERE user_id = '$user_id'";
    $u = exeQuery($sql111, false);
    client_render('checkout/index.php', compact('u'));
}
//function order(){
// $fullname = $_POST['fullname'];
// $contract_number = $_POST['contract_number'];
// $shipping_address = $_POST['address'];
// $email = $_POST['email'];
//client_render('checkout/order-view.php');
//}
function invoice()
{
    if (isset($_SESSION['email'])) {
        $user_id = $_SESSION['email']['user_id'];
        $fullname = $_SESSION['email']['fullname'];
        $code = rand(0, 9999);
        $email = $_SESSION['email']['email'];
        $address = $_SESSION['email']['address'];
        $number = $_SESSION['email']['contract_number'];
        $insert_invoice = "INSERT INTO invoice(fullname,contract_number,address,email,code) values ('$fullname','$number','$address','$email','$code')";
      
        $invoice_id = insertDataAndGetId($insert_invoice);
        if ($insert_invoice) {
            //thêm vào invoice_details
            $total = 0;

            $sql = "SELECT cart.cart_id, product.name_product, product.image_product,product.product_id,color.color_id,warranty.warranty_id, product.price_default, product.warranty, color.price_add, color.name_color, warranty.price, cart.quantity, warranty.name_warranty, warranty.warranty_w
            FROM (((duan1.cart
            INNER JOIN duan1.product ON cart.product_id = product.product_id)
            INNER JOIN duan1.color ON cart.color_id = color.color_id)
            INNER JOIN duan1.warranty ON cart.warranty_id = warranty.warranty_id) WHERE cart.user_id = '$user_id'";
            $f = exeQuery($sql, true);
            foreach ($f as $index => $value) {
                $product_id = $value['product_id'];
                $color = $value['color_id'];
                $soluong = $value['quantity'];
                $baohanh = $value['warranty_id'];
                $total += $value['quantity'] * $value['price_default'] + $value['quantity'] * $value['price_add'] + $value['quantity'] * $value['price'];
                $insert_invoice_details = "INSERT INTO invoice_detail(invoice_id,product_id,color_id,warranty_id,quantity,unit_price,code) values ('$invoice_id','$product_id','$color','$baohanh','$soluong','$total','$code')";
                $v = exeQuery($insert_invoice_details, false);
            }
        }
        client_render('checkout/order-view.php', compact('total'));
    } else {
        // header('Location:home');
    }
}
function check_oder()
{
    if (isset($_SESSION['email'])) {
        $user_id = $_SESSION['email']['user_id'];
        $sql111 = "SELECT * FROM user WHERE user_id = '$user_id'";
        $u = exeQuery($sql111, false);
        // lấy dữ liệu từ giỏ hàng
        $sql = "SELECT cart.cart_id, product.name_product, product.image_product, product.price_default, product.warranty, color.price_add, color.name_color, warranty.price, cart.quantity, warranty.name_warranty, warranty.warranty_w
        FROM (((duan1.cart
        INNER JOIN duan1.product ON cart.product_id = product.product_id)
        INNER JOIN duan1.color ON cart.color_id = color.color_id)
        INNER JOIN duan1.warranty ON cart.warranty_id = warranty.warranty_id) WHERE cart.user_id = '$user_id' ORDER BY cart_id DESC
        ";
        $a = exeQuery($sql, true);
        $total = 0;
        foreach ($a as $index => $j) {
            $total += $j['quantity'] * $j['price_default'] + $j['quantity'] * $j['price_add'] + $j['quantity'] * $j['price'];
        }
        // var_dump($total);
        // die;
        // lấy tổng giá của toàn bộ giỏ hàng
        // $sql1 = "SELECT SUM(total_price) as total FROM cart WHERE user_id = '$user_id'";
        // $b = exeQuery($sql1, false);
        client_render('checkout/order-view.php', compact('a', 'total', 'u'));

        // xóa sản phẩm trong giỏ hàng
        /*code*/
    } else {
        header('Location:home');
    }
}
