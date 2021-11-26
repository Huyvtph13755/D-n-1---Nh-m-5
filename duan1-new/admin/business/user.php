<?php
function user_index()
{
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
    // lấy danh sách danh mục
    $sql = "SELECT * FROM user WHERE email like '%$keyword%'  ORDER BY role DESC";
    // $sql = "select * from product where name_product like '%$keyword%'";
    $user_index = exeQuery($sql, true);

    // hiển thị view
    admin_render('user/index.php', compact('user_index', 'keyword'), 'admin-assets/custom/category_index.js');
}
function update_user()
{
    if (isset($_GET['role'])) {
            $user_id = $_GET['user_id'];
            $sql = "SELECT * FROM user WHERE user_id= '$user_id' AND role = 1";
            $detail_user = exeQuery($sql, false);
            admin_render('user/update-user.php', compact('detail_user'), 'admin-assets/custom/category_index.js');
    }else{
        header('Location:cp-admin/user');
    }
}
