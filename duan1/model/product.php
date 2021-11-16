<?php
 
function load4product(){
    $sql = "SELECT * FROM product ORDER BY view DESC LIMIT 0,8";
    $s = exeQuery($sql, true); //Truy vấn nhiều sp
    return $s;
}
// lấy 4 sp mới nhất

function load4Feaproduct(){
    $sql = "SELECT  product.product_id, product.name_product, color.product_id, color.color_id, color.price, color.name_color FROM duan1.product, duan1.color WHERE product.product_id = color.product_id ORDER BY product.view DESC limit 8";
    $s = exeQuery($sql, true);
    return $s; 
}
function load4Newproduct(){
    $sql = "SELECT  product.product_id, product.name_product, color.product_id, color.color_id, color.price, color.name_color FROM duan1.product, duan1.color WHERE product.product_id = color.product_id ORDER BY product.post_date DESC limit 8";
    $s = exeQuery($sql, true);
    return $s; 
}


// function load_name_subcategory($sub_id)
// {
//     if ($sub_id > 0) {
//         $sql = "select * from danhmuc where id=" . $sub_id;
//         $sub = exeQuery($sql, false);
//         extract($sub);
//         return $name;
//     } else {
//         return "";
//     }
// }
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
// lấy random 6 sản phẩm
function getRanPr(){
    $sql = "SELECT * FROM product ORDER BY RAND() LIMIT 6";
    $s = exeQuery($sql, true);
    return $s;
}

// End code của Huy
