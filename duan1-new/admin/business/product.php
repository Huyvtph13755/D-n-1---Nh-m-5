<?php

function product_index()
{
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
    // lấy danh sách danh mục
    $sql = "SELECT product.product_id, product.name_product, product.price_default, product.image_product, subcategory.name_subcategory, subcategory.subcategory_id
    FROM (duan1.product
    INNER JOIN duan1.subcategory ON product.subcategory_id = subcategory.subcategory_id) WHERE name_product like '%$keyword%'
    ";
    // $sql = "select * from product where name_product like '%$keyword%'";
    $pro = exeQuery($sql, true);

    // hiển thị view
    admin_render('product/index.php', compact('pro', 'keyword'), 'admin-assets/custom/category_index.js');
}

// function cate_remove(){
//     $id = $_GET['id'];
//     $sql = "delete from categories where id = $id";
//     exeQuery($sql);
//     header("location: " . ADMIN_URL . 'danh-muc');
// }

function creat_new_product()
{
    $sql2 = "SELECT * FROM subcategory";
    $subcate = exeQuery($sql2, true);
    admin_render('product/creat-new-product.php', compact('subcate'), 'admin-assets/custom/category_add.js');
}
function update_product()
{
    $sql2 = "SELECT * FROM subcategory";
    $subcate = exeQuery($sql2, true);
    $product_id = $_GET['product_id'];
    $sql3 = "SELECT * FROM product WHERE product_id = '$product_id'";
    $detail_pro = exeQuery($sql3, false);
    admin_render('product/update-product.php', compact('detail_pro', 'subcate'), 'admin-assets/custom/category_add.js');
}
function del_product(){
    $product_id = $_GET['product_id'];
    $sql3 = "DELETE FROM product WHERE product_id = '$product_id'";
    admin_render('product/del-product.php', compact('product_id'), 'admin-assets/custom/category_index.js');
}

function detail_product()
{
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
    // lấy danh sách danh mục
    $product_id = $_GET['product_id'];
    $sql = "SELECT product.product_id, product.name_product, product.price_default, product.image_product, subcategory.name_subcategory, subcategory.subcategory_id, product.warranty, product.post_date, product.view, product.decription, product.sub_decription
        FROM (duan1.product
        INNER JOIN duan1.subcategory ON product.subcategory_id = subcategory.subcategory_id) WHERE product_id = '$product_id'
        ";
    // $sql = "select * from product where name_product like '%$keyword%'";
    $pro = exeQuery($sql, false);
    $sql4 = "SELECT * FROM color WHERE product_id = '$product_id'";
    $color = exeQuery($sql4, true);
    // hiển thị view
    admin_render('product/detail-product.php', compact('pro', 'keyword', 'color'), 'admin-assets/custom/category_index.js');
}

function creat_new_color(){
    admin_render('product/creat-new-color.php', [], 'admin-assets/custom/category_add.js');
}
function update_color(){
    $color_id = $_GET['color_id'];
    $sql5 = "SELECT * FROM color WHERE color_id = '$color_id'";
    $upc = exeQuery($sql5, false);
    admin_render('product/update-color.php', compact('upc'), 'admin-assets/custom/category_add.js');
}
// function cate_save_add(){
//     $name = $_POST['name'];
//     $show_menu = isset($_POST['show_menu']) ? 1 : 0;
//     $sql = "insert into categories (name, show_menu) values ('$name', $show_menu)";
//     exeQuery($sql);
//     header("location: " . ADMIN_URL . 'danh-muc');
// }
