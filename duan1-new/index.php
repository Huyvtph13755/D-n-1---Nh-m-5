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
    case 'cart':
        require_once './client/business/cart.php';
        cart();
        break;
        // Hoàng

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
        require_once './client/business/cart.php';
        del_product_in_cart();
        break;
        // admin
    case 'cp-admin':
        require_once './admin/business/dashboard.php';
        dashboard_index();
        break;
    case 'cp-admin/category':
        require_once './admin/business/category.php';
        cate_index();
        break;
    case 'cp-admin/category/detail-category':
        require_once './admin/business/category.php';
        detail_category();
        break;
    case 'cp-admin/category/creat-new-category':
        require_once './admin/business/category.php';
        creat_new_category();
        break;
    case 'cp-admin/category/update-category':
        require_once './admin/business/category.php';
        update_category();
        break;
    case 'cp-admin/category/creat-new-subcategory':
        require_once './admin/business/category.php';
        creat_new_subcategory();
        break;
    case 'cp-admin/category/update-subcategory':
        require_once './admin/business/category.php';
        update_subcategory();
        break;
    case 'cp-admin/warranty':
        require_once './admin/business/warranty.php';
        warr_index();
        break;
    case 'cp-admin/warranty/creat-new-warranty':
        require_once './admin/business/warranty.php';
        creat_new_warranty();
        break;
    case 'cp-admin/warranty/update-warranty':
        require_once './admin/business/warranty.php';
        update_warranty();
        break;
    case 'cp-admin/comment':
        require_once './admin/business/comment.php';
        comment_index();
        break;
    case 'cp-admin/comment/detail-comment':
        require_once './admin/business/comment.php';
        detail_comment();
        break;
    case 'cp-admin/comment/change-comment':
        require_once './admin/business/comment.php';
        change_comment();
        break;
    case 'cp-admin/comment/del-comment':
        require_once './admin/business/comment.php';
        del_comment();
        break;
    case 'cp-admin/user':
        require_once './admin/business/user.php';
        user_index();
        break;
    case 'cp-admin/user/update-user':
        require_once './admin/business/user.php';
        update_user();
        break;
    case 'cp-admin/user/creat-new-user-admin':
        require_once './admin/business/user.php';
        creat_user_admin();
        break;
    case 'cp-admin/user/save-creat-new-user':
        require_once './admin/business/user.php';
        save_creat_user_admin();
        break;
    case 'cp-admin/product':
        require_once './admin/business/product.php';
        product_index();
        break;
    case 'cp-admin/product/creat-new-product':
        require_once './admin/business/product.php';
        creat_new_product();
        break;
    case 'cp-admin/product/save-creat-new-product':
        require_once './admin/business/product.php';
        save_creat_new_product();
        break;
    case 'cp-admin/product/save-creat-new-color':
        require_once './admin/business/product.php';
        save_creat_new_color();
        break;
    case 'cp-admin/product/update-product':
        require_once './admin/business/product.php';
        update_product();
        break;
    case 'cp-admin/product/save-update-product':
        require_once './admin/business/product.php';
        save_update_product();
        break;
    case 'cp-admin/product/creat-new-color':
        require_once './admin/business/product.php';
        creat_new_color();
        break;
    case 'cp-admin/product/update-color':
        require_once './admin/business/product.php';
        update_color();
        break;
    case 'cp-admin/product/del-color':
        require_once './admin/business/product.php';
        del_color();
        break;
    case 'cp-admin/product/del-product':
        require_once './admin/business/product.php';
        del_product();
        break;
    case 'cp-admin/product/save-update-color':
        require_once './admin/business/product.php';
        save_update_color();
        break;
    case 'cp-admin/product/detail-product':
        require_once './admin/business/product.php';
        detail_product();
        break;
    case 'cp-admin/user/save-update-user':
        require_once './admin/business/user.php';
        save_update_user();
        break;
    case 'cp-admin/user/lock-user':
        require_once './admin/business/user.php';
        lock_user();
        break;

    default:
        require_once './client/business/home.php';
        getProduct();
        break;
}
