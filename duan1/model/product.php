<?php
 
function load4product(){
    $sql = "SELECT * FROM product ORDER BY view DESC LIMIT 0,8";
    $s = exeQuery($sql, true); //Truy vấn nhiều sp
    return $s;
}

// Lấy 8 sản phẩm bán chạy nhất
function load4Feaproduct(){
    $sql = "SELECT  product.product_id, product.name_product, color.product_id, color.color_id, color.price, color.name_color FROM duan1.product, duan1.color WHERE product.product_id = color.product_id ORDER BY color.quantity ASC limit 12";
    $s = exeQuery($sql, true);
    return $s; 
}

// Lấy 8 sản phẩm mới nhất
function load4Newproduct(){
    $sql = "SELECT  product.product_id, product.name_product, color.product_id, color.color_id, color.price, color.name_color FROM duan1.product, duan1.color WHERE product.product_id = color.product_id ORDER BY product.post_date DESC limit 8";
    $s = exeQuery($sql, true);
    return $s; 
}

//  Update view
function updateView($product_id){
    $sql = "UPDATE product SET view = view + 1 WHERE product_id = $product_id";
    return exeQuery($sql);
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
function product_detail($product_id){
    $sql = "SELECT * FROM product WHERE product_id = $product_id";
    $s = exeQuery($sql, false);
    return $s;
}
// lấy random 6 sản phẩm
function getRanPr(){
    $sql = "SELECT product.product_id, product.name_product, color.product_id, color.name_color, color.price, color.color_id FROM duan1.color, duan1.product WHERE product.product_id = color.product_id ORDER BY RAND() LIMIT 6";
    $s = exeQuery($sql, true);
    return $s;
}

// End code của Huy
