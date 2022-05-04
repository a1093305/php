<html>
    <head>
        <title>我的相簿</title>
    </head>
</html>
<?php
    date_default_timezone_set("Asia/Taipei");
    require('conn.php');

    $SQL = "SELECT * FROM photos";

    echo '<center><h1>我的相簿</h1></center>';

    if ($result = mysqli_query($conn, $SQL)){
        echo '<table align = "center" border = "1">';
        while ($row = mysqli_fetch_assoc($result)){
            echo '<tr align = "center"><td><img width = 30% src = "/'.x$row['p_path'].'"></td>';
            echo '<td>'.$row['p_path'].'</td>';
            echo '<td><a href = "update.php?name='.$row['p_path'].'">修改</a></td></tr>';
        }
        echo '</table>';
    }
?>