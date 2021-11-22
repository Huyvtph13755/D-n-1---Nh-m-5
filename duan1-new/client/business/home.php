<?php
function getProduct(){
    $sql = "SELECT  * FROM product ORDER BY view DESC LIMIT 8";
    $s = exeQuery($sql, true);
    $sql1 = "SELECT  * FROM product ORDER BY post_date DESC LIMIT 8";
    $a = exeQuery($sql1, true);
    client_render('home/index.php', compact('s', 'a'));
}

?>