<?php
function load4product(){
    $sql = "SELECT * FROM product ORDER BY view DESC LIMIT 0,9";
    $s = exeQuery($sql, true); //Truy vấn nhiều sp
    return $s;
}
function load_name_subcategory($sub_id)
{
    if ($sub_id > 0) {
        $sql = "select * from danhmuc where id=" . $sub_id;
        $sub = exeQuery($sql, false);
        extract($sub);
        return $name;
    } else {
        return "";
    }
}
function loadall_sanpham($sub_id = 0)
{
    $sql = "select * from sanpham where 1";
    if ($sub_id > 0) {
        $sql .= " and sub_id ='" . $sub_id . "' ";
    }
    $sql .= " order by id desc";
    $listpro = exeQuery($sql,true);
    return $listpro;
}

// Code của Huy
// lấy 1 sản phẩm theo id
function product_detail($id){
    $sql = "SELECT * FROM product WHERE product_id = $id";
    $s = exeQuery($sql, false);
    return $s;
}
// End code của Huy
?>