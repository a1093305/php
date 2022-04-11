<?php
    session_start();
    require_once('conn.php');
?>
<html><head>
    <title>會員資料管理</title>
</head><body bgcolor='#D5E5DE'><center>
    <?php
        if (!isset($_SESSION['backend'])){
            echo 'Error';
            header('refresh:3; url=admin.php');
            exit();
        }
        $result = $conn -> query('SELECT * FROM users;');
            if ($result->num_rows != 0){
                echo '<table border = 1><tr>';
                while ($meta = mysqli_fetch_field($result)) {
                    echo "<th> $meta->name </th>";
                }
                echo "</tr>";
                while ($row = mysqli_fetch_row($result)){
                    echo "<tr>";
                    for ($i = 0; $i < mysqli_num_fields($result); $i++){
                        echo "<td>$row[$i]</td>";
                    }
                    echo "<td><a href = 'update.php?username=$row[0]'>修改</a></td><td><a href = 'delete.php?username=$row[0]'>刪除</a></td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
    ?>
    <form action = '' method = 'post'>
        <input type = 'submit' name = 'previous' value = '上一頁'>
    </form>
</center></body></html>
<?php
    if (isset($_POST['previous'])){
        unset($_SESSION['backend']);
        header('location:admin.php');
    }
?>