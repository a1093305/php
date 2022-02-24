<html>
<head>

</head>

<body>

<?php
    echo "網址：";
    echo "https://github.com/a1093305/php";
?>
<br><br>
<?php
    echo date("<b>今天是 Y 年 m 月 d 日</b>");
    $i = 0;
?>
<br><br>
<?php
    echo "<h1>迴圈測試：</h1>初值為: ".($i)." 。";
    for ($j = 0; $j < 6; $j++){
        echo $i;
        if ($i++ == 5){
            echo "等於 5.0";
            break;
        }
        echo "、";
    }
?>

</body>
</html>