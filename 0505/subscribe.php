<?php
    require('conn.php');
?>
<html>
    <head></head>
    <body align = 'center'>
        <?php
            if (isset($_POST['submit'])){
                $email = $_POST['email'];
                $SQL = "SELECT * FROM subscribe WHERE email = '$email'";
                if(mysqli_fetch_row(mysqli_query($conn, $SQL)) > 0){
                    echo '您已訂閱過！';
                } else {
                    mysqli_query($conn, "INSERT INTO subscribe(email) VALUES('$email')");
                    echo '成功加入訂閱！';
                }

                unset($_POST['submit']);
            } else{
                echo "
                <form action = '' method = 'post'>
                請輸入您的email：<input type = 'email' name = 'email' required><br>
                <input type = 'submit' name = 'submit' value = '訂閱'>
                </form>
                ";
            }
        ?>
    </body>
</html>