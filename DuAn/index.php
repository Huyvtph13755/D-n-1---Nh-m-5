<?php
include "Model/pdo.php";
include "Model/cart.php";
include "Model/product.php";
include "Model/color.php";
include "Model/warranty.php";
include "Model/comment.php";
include "View/header.php";
$load_four = load4product();
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'product_detail':
            $load_one = product_detail(1);
            $getMinPr = getMinPrice(1);
            $f_cl = full_color(1);
            $wa = full_warranty();
            include 'View/product_detail.php';
            break;
        case 'product':
            if (isset($_GET['sub_id']) && ($_GET['sub_id'] > 0)) {
                $sub_id = $_GET['sub_id'];
            } else {
                $sub_id = 0;
            }
            $listpro = loadall_sanpham($sub_id = 0);
            $name_product = load_name_subcategory($sub_id);
            include 'View/product.php';
            break;
        case 'cart':
            include 'View/cart.php';
            break;
        case 'register':
            include 'View/register.php';
            break;
        case 'user_profile':
            include 'View/user_profile.php';
            break;
        case 'login':
            include 'View/login.php';
            break;
        default:
            include 'View/home.php';
            break;
    }
} else {
    include 'View/home.php';
}
include 'View/footer.php';
