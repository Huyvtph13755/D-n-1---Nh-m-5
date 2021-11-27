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
function save_update_product()
{
    $product_id = $_POST['product_id'];
    $subcategory_id = $_POST['subcategory_id'];
    $image_product = $_FILES['image_product'];
    $name_product = $_POST['name_product'];
    $price_default = $_POST['price_default'];
    $warranty = $_POST['warranty'];
    $sub_decription = $_POST['sub_decription'];
    $decription = $_POST['decription'];

    if ($image_product['size'] > 0) {
        $filename = uniqid() . '-' . $image_product['name'];
        move_uploaded_file($image_product['tmp_name'], './public/uploads/' . $filename);
        $filename = $filename;
        $sql5 = "UPDATE product 
        SET subcategory_id = '$subcategory_id',
            image_product = '$filename',
            name_product = '$name_product',
            price_default = '$price_default',
            warranty = '$warranty',
            decription = '$decription',
            sub_decription = '$sub_decription'
            WHERE product_id = '$product_id'";
        exeQuery($sql5);
        header("location: " . ADMIN_URL . 'product?msg=Cập nhật thành công');
    } else {
        $sql6 = "UPDATE product 
        SET subcategory_id = '$subcategory_id',
            name_product = '$name_product',
            price_default = '$price_default',
            warranty = '$warranty',
            decription = '$decription',
            sub_decription = '$sub_decription'
            WHERE product_id = '$product_id'";
        exeQuery($sql6);
        header("location: " . ADMIN_URL . 'product?msg=Cập nhật thành công');
    }
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

function creat_new_color()
{
    admin_render('product/creat-new-color.php', [], 'admin-assets/custom/category_add.js');
}
function update_color()
{
    $color_id = $_GET['color_id'];
    $sql5 = "SELECT * FROM color WHERE color_id = '$color_id'";
    $upc = exeQuery($sql5, false);
    admin_render('product/update-color.php', compact('upc'), 'admin-assets/custom/category_add.js');
}
function save_update_color()
{
    $color_id = $_POST['color_id'];
    $image_color = $_FILES['image_color'];
    $name_color = $_POST['name_color'];
    $price_add = $_POST['price_add'];
    $quantity = $_POST['quantity'];
    if ($image_color['size'] > 0) {
        $filename = uniqid() . '-' . $image_color['name'];
        move_uploaded_file($image_color['tmp_name'], './public/uploads/' . $filename);
        $filename = $filename;
        $sql8 = " UPDATE color
                    SET image_color = '$filename',
                        name_color = '$name_color',
                        price_add ='$price_add',
                        quantity = '$quantity'
                    WHERE color_id= '$color_id'";
        exeQuery($sql8);
        header("location:" . ADMIN_URL . 'product');
    } else {
        $sql9 = " UPDATE color
                    SET name_color = '$name_color',
                        price_add ='$price_add',
                        quantity = '$quantity'
                    WHERE color_id= '$color_id'";
        exeQuery($sql9);
        header("location:" . ADMIN_URL . 'product');
    }
}

// function cate_save_add(){
//     $name = $_POST['name'];
//     $show_menu = isset($_POST['show_menu']) ? 1 : 0;
//     $sql = "insert into categories (name, show_menu) values ('$name', $show_menu)";
//     exeQuery($sql);
//     header("location: " . ADMIN_URL . 'danh-muc');
// }


// lưu tạo mới product
function save_creat_new_product()
{
    $name_product = $_POST['name_product'];
    $subcategory_id = $_POST['subcategory_id'];
    $image_product = $_FILES['image_product'];
    $warranty = $_POST['warranty'];
    $price_default = $_POST['price_default'];
    $sub_decription = $_POST['sub_decription'];
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date = date('Y-m-d H:i:sa', time());
    $decription = $_POST['decription'];
    $view = 0;
    // var_dump($image_product);
    // die;
    if ($image_product['size'] > 0) {
        $filename = uniqid() . '-' . $image_product['name'];
        move_uploaded_file($image_product['tmp_name'], './public/uploads/' . $filename);
        $filename = $filename;
    }
    $sql01 = "INSERT INTO product (name_product, image_product, warranty, sub_decription, decription, price_default, subcategory_id, view, post_date)
                    values('$name_product', '$filename', '$warranty', '$sub_decription', '$decription','$price_default','$subcategory_id', '$view', '$date')";
    exeQuery($sql01, false);
    header("location: " . ADMIN_URL . 'product');
}

