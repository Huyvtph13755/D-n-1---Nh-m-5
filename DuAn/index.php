<?php
include "Model/pdo.php";
include "Model/cart.php";
include "Model/product.php";
include "Model/comment.php";
include "View/header.php";
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'product_detail':
            include 'View/product_detail.php';
            break;
        case 'cart':
            include 'View/cart.php';
            break;
        default:
            include 'View/home.php';
            break;
    }
} else {
    include 'View/home.php';
}
include 'View/footer.php';
