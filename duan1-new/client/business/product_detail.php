<?php
function product_detail(){
    if (isset($_GET['product_id']) && $_GET['product_id'] > 0) {
    $product_id = $_GET['product_id'];

    // lấy chi tiết sản phẩm
    $sql = "SELECT * FROM product WHERE product_id = $product_id";
    $s = exeQuery($sql, false);

    // Lấy sản phẩm tương tự
    $sql1 = "SELECT product.product_id, product.name_product, color.product_id, color.name_color, color.price, color.color_id FROM duan1.color, duan1.product WHERE product.product_id = color.product_id ORDER BY RAND() LIMIT 6";
    $a = exeQuery($sql1, true);

    // Lấy màu sắc của 1 sản phẩm
    $sql2 = "SELECT * FROM color WHERE product_id = '$product_id' ORDER BY price ASC";
    $b = exeQuery($sql2, true);

    // lấy bảo hành
    $sql3 = "SELECT * FROM warranty ORDER BY price ASC";
    $h = exeQuery($sql3, true);


    // Lấy 5 cmt mới nhất
    $sql4 = "SELECT comment.comment_id, comment.product_id, comment.user_id, comment.content, comment.date_comment, user.user_id, user.fullname, user.email FROM duan1.comment, duan1.user WHERE comment.user_id = user.user_id AND comment.product_id = '$product_id' AND comment.status = 1 ORDER BY comment.date_comment DESC limit 5";
    $d = exeQuery($sql4, true);

    // update view
    $sql5 = "UPDATE product SET view = view + 1 WHERE product_id = $product_id";
    exeQuery($sql5);
    // lấy giá thấp nhất của 1 sản phẩm
    $colors = "SELECT MIN(price) as pr FROM color WHERE product_id = $product_id";
    $e = exeQuery($colors, false);
    if (isset($_POST['product_detail'])) {
        if (isset($_SESSION['email'])) {
            $user_id = $_SESSION['email']['user_id'];
            $content = $_POST['content'];
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $date = date('Y-m-d H:i:sa', time());
            $sql = "INSERT INTO comment(product_id, user_id, content, date_comment) VALUE('$product_id' , '$user_id', '$content', '$date')";
            exeQuery($sql, false);
            header('Location:?msg=Bình luận của bạn đang chờ phê duyệt!');
        } else {
            header('Location:?msg=Bạn chưa đăng nhập nên chưa thể bình luận');
        }
    }

    client_render('product_detail/index.php', compact('s', 'a', 'b', 'h', 'd', 'e'));
} else {
    header('location: /');
}
}
