<?php
    session_start();
    session_unset();
    session_destroy();
?>
<html>
<head>
    <title>登出</title>
</head><body bgcolor='#D5E5DE'><center>
    <?php
        echo '登出成功，3 秒後返回登入頁';
        header('refresh:3; url=login.php');
    ?>
</center></body></html>