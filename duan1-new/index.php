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
    case 'cp-admin/user':
        require_once './admin/business/user.php';
        user_index();
        break;
    case 'cp-admin/user/update-user':
        require_once './admin/business/user.php';
        update_user();
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
    case 'cp-admin/product/save-update-color':
        require_once './admin/business/product.php';
        save_update_color();
        break;
    case 'cp-admin/product/detail-product':
        require_once './admin/business/product.php';
        detail_product();
        break;
    case 'cp-admin/danh-muc/xoa':
        require_once './admin/business/category.php';
        cate_remove();
        break;
    case 'cp-admin/danh-muc/tao-moi':
        require_once './admin/business/category.php';
        cate_add_form();
        break;
    case 'cp-admin/danh-muc/luu-tao-moi':
        require_once './admin/business/category.php';
        cate_save_add();
        break;
    case 'upload-img-form':
        require_once './client/business/homepage.php';
        img_upload_form();
        break;
    case 'save-upload-image':
        require_once './client/business/homepage.php';
        save_image();
        break;
    default:
        require_once './client/business/home.php';
        getProduct();
        break;
}
