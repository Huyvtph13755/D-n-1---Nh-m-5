<?php
function warr_index()
{
    if (isset($_SESSION['email']) && $_SESSION['email']['role'] >= 1) {
        $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
        // lấy danh sách danh mục
        $sql = "SELECT * FROM warranty";
        // $sql = "select * from product where name_product like '%$keyword%'";
        $warr = exeQuery($sql, true);

        // hiển thị view
        admin_render('warranty/index.php', compact('warr', 'keyword'), 'admin-assets/custom/category_index.js');
    } else {
        header("location: " . BASE_URL);
    }
}
function creat_new_warranty()
{
    if (isset($_SESSION['email']) && $_SESSION['email']['role'] >= 1) {
        admin_render('warranty/creat-new-warranty.php', [], 'admin-assets/custom/category_add.js');
    } else {
        header("location: " . BASE_URL);
    }
}
function update_warranty()
{
    if (isset($_SESSION['email']) && $_SESSION['email']['role'] >= 1) {
        $warranty_id = $_GET['warranty_id'];
        $sql3 = "SELECT * FROM warranty WHERE warranty_id = '$warranty_id'";
        $detail_warr = exeQuery($sql3, false);
        admin_render('warranty/update-warranty.php', compact('detail_warr'), 'admin-assets/custom/category_add.js');
    } else {
        header("location: " . BASE_URL);
    }
}
