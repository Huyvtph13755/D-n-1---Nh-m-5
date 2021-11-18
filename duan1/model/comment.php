<?php

// Code của Huy
//  Lấy 5 bình luận mới nhất của 1 sản phẩm
function getAllCmt($product_id){
    $sql = "SELECT comment.comment_id, comment.product_id, comment.user_id, comment.content, comment.date_comment, user.user_id, user.fullname, user.email FROM duan1.comment, duan1.user WHERE comment.user_id = user.user_id AND comment.product_id = '$product_id' AND comment.status = 1 ORDER BY comment.date_comment DESC limit 5";
    $s = exeQuery($sql, true);
    return $s;
}
function addCmt($product_id, $user_id, $content, $date_comment){
    $sql = "INSERT INTO comment(product_id, user_id, content, date_comment) VALUE('$product_id' , '$user_id', '$content', '$date_comment')";
    return exeQuery($sql, false);
}
// End code của Huy