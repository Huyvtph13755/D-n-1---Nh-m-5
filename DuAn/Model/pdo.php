<?php
function exeQuery($sqlQuery, $getAll = true){
    $host = "127.0.0.1";
    $dbname = "duan1";
    $dbusername = "root";
    $dbpassword = "";
    $connect = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", 
                            $dbusername, $dbpassword);

    $stmt = $connect->prepare($sqlQuery);
    $stmt->execute();
    if($getAll == true){
        return $stmt->fetchAll();
    } 
    return $stmt->fetch();

}

// function pdo_execute($sql){
//     $sql_args = array_slice(func_get_args(), 1);
//     try{
//         $conn = exeQuery();
//         $stmt = $conn->prepare($sql);
//         $stmt->execute($sql_args);
//     }
//     catch(PDOException $e){
//         throw $e;
//     }
//     finally{
//         unset($conn);
//     }
// }
// function pdo_query($sql){
//     $sql_args = array_slice(func_get_args(), 1);
//     try{
//         $conn = exeQuery();
//         $stmt = $conn->prepare($sql);
//         $stmt->execute($sql_args);
//         $rows = $stmt->fetchAll();
//         return $rows;
//     }
//     catch(PDOException $e){
//         throw $e;
//     }
//     finally{
//         unset($conn);
//     }
// }
// function pdo_query_one($sql){
//     $sql_args = array_slice(func_get_args(), 1);
//     try{
//         $conn = exeQuery();
//         $stmt = $conn->prepare($sql);
//         $stmt->execute($sql_args);
//         $row = $stmt->fetch(PDO::FETCH_ASSOC);
//         return $row;
//     }
//     catch(PDOException $e){
//         throw $e;
//     }
//     finally{
//         unset($conn);
//     }
// }
// ?> 
