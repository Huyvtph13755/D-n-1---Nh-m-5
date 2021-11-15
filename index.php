<?php
ob_start();
session_start();
include "model/pdo.php";
include "model/cart.php";
include "model/product.php";
include "model/color.php";
include "model/user.php";
include "model/warranty.php";
include "model/comment.php";
include "view/header.php";
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'product_detail':
            $load_one = product_detail(1);
            $getMinPr = getMinPrice(1);
            $f_cl = full_color(1);
            $wa = full_warranty();
            $gCmt = getAllCmt(1);
            $ranPr = getRanPr();
            include 'view/detailproduct.php';
            break;
        case 'home':
            // if (isset($_GET['sub_id']) && ($_GET['sub_id'] > 0)) {
            //     $sub_id = $_GET['sub_id'];
            // } else {
            //     $sub_id = 0;
            // }

            // $listpro = loadall_sanpham($sub_id = 0);
            // $name_product = load_name_subcategory($sub_id);
            $feature_pro = load4Newproduct();
            // var_dump($feature_pro);
            // die;
            include 'view/home.php';
            break;
        case 'cart':
            include 'view/cart.php';
            break;
        case 'register':
            if (isset($_POST['register'])) {
                $fullname = $_POST['fullname'];
                $email = $_POST['email'];
                $password = md5($_POST['password']);
                insert_user($fullname, $email, $password);
                $notification = "Đăng ký thành công. Vui lòng đăng nhập để thực hiện các chức năng!";
            }
            include 'view/register.php';
            break;
        case 'user_profile':
            include 'view/user_profile.php';
            break;
        case 'logout':
            session_unset();
            header('location: index.php');
            break;
        case 'login':
            if (isset($_POST['login'])) {
                $email = $_POST['email'];
                $password = md5($_POST['password']);
                $checkuser = checkuser($email, $password);
                if (is_array($checkuser)) {
                    $_SESSION['email'] = $checkuser;
                    $notification = "Bạn đã đăng nhập thành công!";
                } else {
                    $notification = "Tài khoản không tồn tại. Vui lòng kiểm tra lại hoặc đăng ký!";
                }
            }
            include 'view/login.php';
            break;
        default:
            include 'view/home.php';
            break;
    }
} else {
    include 'view/home.php';
}
include 'view/footer.php';
