<?php
    require('conn.php');
    $username = $_GET['username'];
    $result = $conn -> query("SELECT * FROM users WHERE username = '$username'");
    if ($result->num_rows != 1){
        echo '錯誤！<br> 3 秒後跳回管理介面';
        header('refresh:3; url=backend.php');
        exit();
    } else{
        $row = mysqli_fetch_row($result);
    }
    $conn -> query("DELETE FROM users WHERE username = '$username'");
    header('location:backend.php');
    ob_end_flush();
?>