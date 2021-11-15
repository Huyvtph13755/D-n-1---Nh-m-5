<?php

// Code của Huy
//  Lấy 5 bình luận mới nhất của 1 sản phẩm
function getAllCmt($id){
    $sql = "SELECT comment.comment_id, comment.product_id, comment.user_id, comment.content, comment.date_comment, user.user_id, user.fullname, user.email FROM duan1.comment, duan1.user WHERE comment.user_id = user.user_id AND comment.product_id = '$id' AND comment.status = 1 ORDER BY comment.date_comment DESC limit 5";
    $s = exeQuery($sql, true);
    return $s;
}
// End code của Huy