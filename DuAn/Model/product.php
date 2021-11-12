<?php
function load4product(){
    $sql = "SELECT * FROM product ORDER BY view DESC LIMIT 0,9";
    $s = exeQuery($sql, true); //Truy vấn nhiều sp
}
?>