<?php

function cate_index()
{
    if (isset($_SESSION['email']) && $_SESSION['email']['role'] >= 1) {
        $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
        // lấy danh sách danh mục
        $sql = "select * from category where name_category like '%$keyword%'";
        $cates = exeQuery($sql, true);
        // hiển thị view
        admin_render('category/index.php', compact('cates', 'keyword'), 'admin-assets/custom/category_index.js');
    } else {
        header("location: " . BASE_URL);
    }
}
function creat_new_category()
{
    if (isset($_SESSION['email']) && $_SESSION['email']['role'] >= 1) {
        admin_render('category/creat-new-category.php', [], 'admin-assets/custom/category_add.js');
    } else {
        header("location: " . BASE_URL);
    }
}


function update_category()
{
    if (isset($_SESSION['email']) && $_SESSION['email']['role'] >= 1) {
        $category_id = $_GET['category_id'];
        $sql3 = "SELECT * FROM category WHERE category_id = '$category_id'";
        $detail_cate = exeQuery($sql3, false);
        admin_render('category/update-category.php', compact('detail_cate'), 'admin-assets/custom/category_add.js');
    } else {
        header("location: " . BASE_URL);
    }
}
function update_subcategory()
{
    if (isset($_SESSION['email']) && $_SESSION['email']['role'] >= 1) {
        $subcategory_id = $_GET['subcategory_id'];
        $sql3 = "SELECT * FROM subcategory WHERE subcategory_id = '$subcategory_id'";
        $detail_subcate = exeQuery($sql3, false);
        admin_render('category/update-subcategory.php', compact('detail_subcate'), 'admin-assets/custom/category_add.js');
    } else {
        header("location: " . BASE_URL);
    }
}
function detail_category()
{
    if (isset($_SESSION['email']) && $_SESSION['email']['role'] >= 1) {
        // lấy danh sách danh mục
        $category_id = $_GET['category_id'];
        $sql = "SELECT * FROM category WHERE category_id = '$category_id'";
        // $sql = "select * from product where name_product like '%$keyword%'";
        $pro = exeQuery($sql, false);
        $sql4 = "SELECT * FROM subcategory WHERE category_id = '$category_id'";
        $subc = exeQuery($sql4, true);
        admin_render('category/detail-category.php', compact('pro', 'subc'), 'admin-assets/custom/category_index.js');
    } else {
        header("location: " . BASE_URL);
    }
}
function creat_new_subcategory()
{
    if (isset($_SESSION['email']) && $_SESSION['email']['role'] >= 1) {
        admin_render('category/creat-new-subcategory.php', [], 'admin-assets/custom/category_add.js');
    } else {
        header("location: " . BASE_URL);
    }
}
// function save_creat_new_category()
// {
//    $name_category = $_POST['name_category'];
//    $sql54 = "INSERT INTO category (name_product)
//    values ('$name_category')";
//    exeQuery($sql54);
//    header("location: " . ADMIN_URL . 'category');
// }
function save_update_category(){
    $category_id = $_POST['category_id'];
    $name_category = $_POST['name_category'];
    $sql1101 = "UPDATE category 
    SET name_category = '$name_category'
    WHERE category_id = '$category_id'";
    exeQuery($sql1101);
    header("location:" . ADMIN_URL . 'category?msg=Cập nhật thành công');
}
function delete_category(){
    $category_id = $_GET['category_id'];
    $sql55= "DELETE FROM category WHERE category_id = '$category_id'";
    exeQuery($sql55);
    header("location:" . ADMIN_URL . 'category?msg=Xóa thành công');
}
function save_creat_new_category(){
    $category_id = $_POST['category_id'];
    $name_category = $_POST['name_category'];
    $sql56 = "INSERT INTO category (category_id, name_category)
            values('$category_id', '$name_category')";
    exeQuery($sql56);
    header("location:" . ADMIN_URL . 'category?msg=Cập nhật thành công');

}
?>