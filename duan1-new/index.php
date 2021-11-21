<?php
session_start();
$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : "/";
require_once './commons/utils.php';
require_once './dao/pdo.php';
switch ($url) {
    case 'home':
        require_once './client/business/home.php';
        getProduct();
        break;
    case 'product_detail':
        require_once './client/business/product_detail.php';
        product_detail();
        break;
    case 'login':
        require_once './client/business/login.php';
        login();
        break;
    case 'register':
        require_once './client/business/register.php';
        register();
        break;
    case 'user_profile':
        require_once './client/business/user_profile.php';
        profile();
        break;
    case 'logout':
        require_once './client/business/login.php';
        logout();
        break;
        // Huy
    case 'add_product':
        require_once './client/business/add_product.php';
        add_product();
        break;
    case 'cart':
        require_once './client/business/cart.php';
        cart();
        break;
        // Hoàng
    case 'payment':
        require_once './client/business/payment.php';
        payment();
        break;
        // HOàng
    case 'status':
        require_once './client/business/status.php';
        status();
        break;
        // Hoàng
    case 'forgot_password':
        require_once './client/business/forgot_password.php';
        forgot_password();
        break;
        // Vân Anh
    case 'change_password':
        require_once './client/business/change_password.php';
        change_password();
        break;
        // Trà My
    case 'shop':
        require_once './client/business/shop.php';
        shop();
        break;
        // Vân anh
    case 'del_product_in_cart':
        require_once './client/business/del_product_in_cart.php';
        del_product_in_cart();
        break;

    default:
        require_once './client/business/home.php';
        getProduct();
        break;
}
