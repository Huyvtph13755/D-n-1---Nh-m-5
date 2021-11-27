<?php
function comment_index(){
    $sql = "SELECT comment.comment_id, COUNT(comment.product_id) AS cmp, product.name_product, comment.product_id FROM comment INNER JOIN product ON comment.product_id = product.product_id GROUP BY comment.product_id";
    $index_cmt = exeQuery($sql, true);
    admin_render('comment/index.php', compact('index_cmt'), 'admin-assets/custom/category_index.js');
}
function detail_comment(){
    $product_id = $_GET['product_id'];
    $sql2 = "SELECT comment.comment_id, product.name_product, user.email, comment.content, comment.date_comment, comment.status
    FROM ((duan1.comment 
    INNER JOIN duan1.user ON comment.user_id = user.user_id)
    INNER JOIN duan1.product ON comment.product_id = product.product_id) WHERE comment.product_id = '$product_id'
    ";
    $detail_comment = exeQuery($sql2, true);
    $sql3 = "SELECT * FROM product WHERE product_id = '$product_id'";
    $d_product =  exeQuery($sql3, false);
    admin_render('comment/detail-comment.php', compact('detail_comment', 'd_product'),'admin-assets/custom/category_index.js');
}
