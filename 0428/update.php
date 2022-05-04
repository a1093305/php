<?php
    date_default_timezone_set("Asia/Taipei");
    require('conn.php');
?>
<html>
    <body align = 'center'>
        <form action = '' method = 'post' enctype = 'multipart/form-data'>
            <table align = 'center'>
                <tr><td>點此上傳照片：　</td><td><input type = 'file' name = 'newphoto' accept = 'image/*'></td></tr>
            </table>
            <input type = 'submit' name = 'submit' value = '確認'>
        </form>
    </body>
</html>
<?php
    if (isset($_POST['submit'])){
        if (isset($_FILES['newphoto'])){
            $name = $_GET['name'];
            $extname = pathinfo($_FILES['newphoto']['name'], PATHINFO_EXTENSION);
            $time = time();
            $finalphoto = 'Photo_'.$time.'.'.$extname;
            $SQL = "UPDATE photos SET p_path = '$finalphoto', p_date = '$time' WHERE p_path = '$name'";
            if (copy($_FILES['newphoto']['tmp_name'], $finalphoto)){
                mysqli_query($conn, $SQL);
                echo '<script type = "text/javascript"> alert("照片更改成功"); </script>';
            }
        }
        unset($_FILES['newphoto']);
        echo '<meta http-equiv = "Refresh" content = "0; url = photolist.php">';
    }
?>