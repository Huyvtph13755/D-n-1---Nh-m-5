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
    default:
        require_once './client/business/home.php';
        getProduct();
        break;
}
