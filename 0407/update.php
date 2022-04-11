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
?>
<html><head>
    <title>使用者更新</title>
</head><body bgcolor='#D5E5DE'><center>
    <form action = '' method = 'post'>
        <table style = 'left'>  
            <tr><td>
                更新後的密碼：<input type = 'password' name = 'password' pattern = '[a-zA-Z0-9]{4,20}' placeholder = '4~20字元長之英數'  value = '<?php echo $row[1]; ?>' required><br>
                更新的email：<input type = 'email' name = 'email' placeholder = '如：abc@xxx.com'  value = '<?php echo $row[2]; ?>' required><br>
                更新後的tel：<input type = 'tel' name = 'tel' pattern = '09[0-9]{8}' placeholder = '09開頭，10位' value = '<?php echo $row[3]; ?>' required><br>
            </td></tr>
	        <tr><td align = 'center'><input type = 'submit' name = 'update' value = '更新'></td></tr>
        </table>
    </form>
</center></body></html>

<?php
    if (isset($_POST['update'])){
        $password = $_POST['password'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $conn -> query("UPDATE users SET password = '$password', email = '$email', tel = '$tel' WHERE username = '$username'");
        header('location:backend.php');
    }
    ob_end_flush();
?>