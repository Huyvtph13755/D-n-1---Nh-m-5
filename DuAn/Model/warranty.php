<?php
// Code của Huy
// Lấy hết dữ liệu của bảng warranty
function full_warranty(){
    $sql = "SELECT * FROM warranty ORDER BY price ASC";
    $s = exeQuery($sql, true);
    return $s;
}
// End code của Huy
?>