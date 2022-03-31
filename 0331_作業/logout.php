<?php
    session_unset();
    echo '登出成功，3 秒後返回登入頁';
    header('refresh:3; url=login.php');
?>
<html>
<head>
    <title>登出</title>
</head><body bgcolor='#D5E5DE'></body></html>