<?php
    date_default_timezone_set("Asia/Taipei");
    require('conn.php');
?>
<html>
    <head>
        <title>相片</title>
    </head>
    <body align = 'center'>
        <form action = '' method = 'post' enctype = 'multipart/form-data'>
            <table align = 'center'>
                <tr><td>點此上傳照片：</td><td><input type = 'file' name = 'photo' accept = 'image/*'></td></tr>
                <tr><td>點此查看所有照片：</td><td><input type = 'submit' name = 'submit' value = '確認'></td></tr>
            </table>
        </form>
    </body>
</html>

<?php
    if (isset($_POST['submit'])){
        if (isset($_FILES['photo'])){
            $extname = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
            $time = time();
            $finalphoto = 'Photo_'.$time.'.'.$extname;
    
            $SQL = "INSERT INTO photos(p_path, p_date) VALUES('$finalphoto', '$time')";
            echo '<script type = "text/javascript"> alert("照片上傳';
    
            if (copy($_FILES['photo']['tmp_name'], $finalphoto)){
                if (mysqli_query($conn, $SQL)){
                    echo '成功"); </script> <meta http-equiv = "Refresh" content = "0; url = photolist.php">';
                } else {
                    echo '失敗"); </script> <meta http-equiv = "Refresh" content = "0; url = index.php">';
                }
            } else {
                echo '失敗"); </script> <meta http-equiv = "Refresh" content = "0; url = index.php">';
            }
        }
        unset($_FILES['photo']);
        echo '<meta http-equiv = "Refresh" content = "0; url = photolist.php">';
    } 
?>