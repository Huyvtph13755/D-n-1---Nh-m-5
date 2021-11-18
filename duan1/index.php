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
$feature_pro = load4Feaproduct();
$new_pro = load4Newproduct();
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'product_detail':
            if (isset($_GET['product_id']) && $_GET['product_id'] > 0) {
                $product_id = $_GET['product_id'];
                $load_one = product_detail($product_id);
                $getMinPr = getMinPrice($product_id);
                $f_cl = full_color($product_id);
                $wa = full_warranty();
                $gCmt = getAllCmt($product_id);
                $ranPr = getRanPr();
                if (isset($_POST['product_detail'])) {
                    if (isset($_SESSION['email'])) {
                        $user_id = $_SESSION['email']['user_id'];
                        $content = $_POST['content'];
                        date_default_timezone_set('Asia/Ho_Chi_Minh');
                        $date = date('Y-m-d H:i:sa', time());
                        $addCmt = addCmt(1, $user_id, $content, $date);
                        header('Location: index.php?act=product_detail&msg=Bình luận của bạn đang chờ phê duyệt!');
                    } else {
                        header('Location: index.php?act=product_detail&msg=Bạn chưa đăng nhập nên chưa thể bình luận');
                    }
                }
                updateView($product_id);
            } else {
                header('location: index.php');
            }

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
            $feature_pro = load4Feaproduct();
            $new_pro = load4Newproduct();
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
                header('location: index.php?act=login?msg=Đăng kí thành công');
            }
            include 'view/register.php';
            break;
        case 'user_profile':
            if (isset($_POST['user_profile'])) {
                $fullname = $_POST['fullname'];
                $contract_number = $_POST['contract_number'];
                $address = $_POST['address'];
                $user_id = $_POST['user_id'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                update_user($user_id, $fullname, $contract_number, $address);
                header('Location: index.php?act=user_profile&msg=Cập nhật thông tin thành công');
            }
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
                    header('location: index.php?Đăng nhập thành công');
                } else {
                    $notification = "Email hoặc mật khẩu không chính xác. Vui lòng kiểm tra lại hoặc đăng ký!";
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
