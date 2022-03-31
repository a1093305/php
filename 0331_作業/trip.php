<?php
    session_start();
    ob_start();
?>

<html>
    <head>
        <meta name='keywords' content='Kenting,trip'>
        <title>墾丁三日遊　報名表單</title>
        <link rel='icon' href='https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/%E9%B5%9D%E9%91%BE%E9%BC%BB%E7%87%88%E5%A1%94.jpg/180px-%E9%B5%9D%E9%91%BE%E9%BC%BB%E7%87%88%E5%A1%94.jpg' type='image/x-icon'>
    </head><body bgcolor='#D5E5DE'>
        <center>
            <?php
                if (!isset($_SESSION['trip'])){
                    echo 'Error';
                    header('refresh:3; url=login.php');
                    exit();
                }
            ?>
            <h1><font style = 'background-color:#D1F7FF' face = '微軟正黑體'>
                ║　╔═══════╗　║<br>
                ║　║墾丁三日遊║　║<br>
                ║　╚═══════╝　║
            </font></h1>
            <hr color = 'gray' width = 70%>
            <h2><a href = '#itinerary'>行程一覽</a>　　　<a href = '#sign_up'>即刻報名</a></h2>
            <hr color = 'gray' width = 70%>
            <h3>
                位處國境之南的墾丁，不僅四季如春，又有著美麗的海岸，每年都能吸引不少遊客。<br><br>
                <img width = '600' height = '280' src='https://upload.wikimedia.org/wikipedia/commons/thumb/e/e0/Nanwan_%28South_Bay%29.jpg/640px-Nanwan_%28South_Bay%29.jpg'></img><br><br>
                但墾丁的景點絕不只有美麗的大海。我們將帶您走訪：<br>
            </h3><h4>
                亞太水族中心、天明製藥觀光工廠、林後四林平地森林園區、<br>
                社頂自然公園、台電南部展示館、貓鼻頭風景區、龜山步道、<br>
                福安宮、六堆客家文化園區、梧棲觀光漁港、明玥園傳統文化歌廳<br>
            </h4><h3>
                <hr color = 'gray' width = 30%>
                <div><a name = 'itinerary'></a>
                    若您想在三天內體驗到包山包海、文化與自然交織的旅行，那麼以下行程想必非常適合您！<br>
                    <hr color = 'gray' width = 30%>
                    <table style = 'left' cellpadding = '10'>
                        <tr><th>第一日：</th><th>第二日：</th><th>第三日：</th></tr>
                        <tr><td>→集合出發</td><td>→飯店自助式早餐</td><td>→飯店自助式早餐</td></tr>
                        <tr><td>→國際級水族展示廳-亞太水族中心</td><td>→大自然的藝術傑作-社頂自然公園</td><td>→客家文化體驗-六堆客家文化園區</td></tr>
                        <tr><td>→桂花冠餐廳中餐(餐標2000元/桌)</td><td>→海中天餐廳中餐</td><td>→宜湘園餐廳中餐</td></tr>
                        <tr><td>→全台最具規模-天明製藥觀光工廠</td><td>→鮮為人知的好去處-台電南部展示館</td><td>→比水族館還精采的魚市場-梧棲觀光漁港</td></tr>
                        <tr><td>→南臺灣旅遊新亮點-林後四林平地森林園區</td><td>→橫跨台灣和巴士海峽-貓鼻頭風景區</td><td>→康雅嵐、許仙姬帶您重溫歌舞廳秀-明玥園傳統文化歌廳</td></tr>
                        <tr><td>→海忠天餐廳晚餐(餐標2000元/桌)</td><td>→全角度眺望恆春半島壯麗風光-龜山步道</td><td>→一家全順餐廳享用晚餐(餐標2000元/桌)</td></tr>
                        <tr><td>→辦理住房後自由使用飯店設施或前往墾丁大街</td><td>→全台最大土地公廟福安宮</td><td>→快樂賦歸</td></tr>
                        <tr><td>→住宿墾丁福華大飯店</td><td>→明立餐廳享用晚餐(餐標2000元/桌)</td><td></td></tr>
                        <tr><td></td><td>→住宿墾丁福華大飯店</td><td></td></tr>
                    </table><br>
                    <a href ='https://www.pabp.gov.tw/CHT/cl0106.aspx' target = '_new'>
                        <img width = '300' height = '200' src='https://www.pabp.gov.tw/Upload/IMAG0017.JPG'>
                    </a><a href ='https://www.ktnp.gov.tw/News_Content2.aspx?n=5C28A0E32DF925F9&sms=C88B5251F308CE96&s=9C8B9499841F2B1D' target = '_new'>
                    <img width = '300' height = '200' src='https://www.dbnsa.gov.tw/att/pic/b_11005779.jpg'>
                    </a><a href ='https://thcdc.hakka.gov.tw/8268/' target = '_new'>
                        <img width = '300' height = '200' src='https://thcdc.hakka.gov.tw/media/zu5d4doc/f1491999554841.jpg'>
                    </a>
                </div><div><br><a name = 'sign_up'></a>
                    <hr color = 'gray' width = 30%>
                    現在報名即贈送單件紀念T-shirt！<br>
                    心動不如馬上行動，馬上報名參加吧！
                    <hr color = 'gray' width = 30%><br>
                    您需要填寫以下資料：
                    <form action ='' method = 'post' enctype = 'multipart/form-data'><br>
                        <table style = 'left;background-color:#F0EDF7;' border = '1'>
                            <tr><td>
                                您的<b>姓名</b>：<input type = 'text' name = 'name' placeholder = '請輸入您的姓名' required><br>
                                您的<b>聯絡郵箱</b>：<input type = 'email' name = 'email' placeholder = '請輸入您的聯絡郵箱' required><br>
                                您的<b>聯絡電話</b>：<input type = 'tel' name = 'tel' pattern = '09[0-9]{8}' placeholder = '請輸入您的聯絡電話' required><br>
                                您的<b>性別</b>：
                                    <input type = 'radio' name = 'gender' value = 'male' required>男性　
                                    <input type = 'radio' name = 'gender' value = 'female'>女性　
                                    <input type = 'radio' name = 'gender' value = 'other'>其他<br>
                                您的<b>飲食偏好</b>：<br>
                                    <input type = 'checkbox' name = 'food[]' value = 'vegetables' checked>蔬菜　
                                    <input type = 'checkbox' name = 'food[]' value = 'fruit' checked>水果　
                                    <input type = 'checkbox' name = 'food[]' value = 'meat' checked>肉類　
                                    <input type = 'checkbox' name = 'food[]' value = 'seafood' checked>海鮮　<br>
                                    <input type = 'checkbox' name = 'food[]' value = 'diary' checked>蛋、奶類　
                                    <input type = 'checkbox' name = 'food[]' value = 'snacks' checked>甜點類　
                                    <input type = 'checkbox' name = 'food[]' value = 'starches' checked>澱粉類<br>
                                <b><label for 'color'>T-shirt 尺寸（後附對照表）</label></b>：
                                    <select name = 'size' id='size'>
                                        <option>不需要</option>
                                        <option>S</option>
                                        <option>M</option>
                                        <option>L</option>
                                        <option>XL</option>
                                    </select><br>
                                <b>T-shirt 顏色</b>：<input type = 'color' name = 'color[]'><br>
                                您的<b>生日</b>（優惠確認用）：<input type = 'date' name = 'date[]'><br>
                                <b>總人數</b>：<input type = 'number' name = 'number' value = '1' min = '1' required><br>
                                <b>上傳檔案</b>：<input type = 'file' name = 'file'><br>
                            </td></tr><tr><td align = 'center'>
                                若您願意提供我們任何意見或建議，請在下方留言：<br><textarea name = 'comment'></textarea><br>
                                <br><input type = 'submit' name = 'reserve' value = '提交'>
                            </td></tr>
                        </table>
                    </form>
                </div><div> 
                    <hr color = 'gray' width = 30%>
                    <table border = '1'>
                        <caption><b>T-shirt 尺寸對照表</b></caption>
                        <tr style = 'background-color:#C9C9C9;'><th td style = 'background-color:#D5E5DE;'></th><th>S</th><th>M</th><th>L</th><th>XL</th></tr>
                        <tr style = 'background-color:#F0F0F0;'><td style = 'background-color:#C9C9C9;'>胸圍</td><td>48cm</td><td>52cm</td><td>56cm</td><td>60cm</td></tr>
                        <tr style = 'background-color:#F0F0F0;'><td style = 'background-color:#C9C9C9;'>肩寬</td><td>42cm</td><td>44cm</td><td>48cm</td><td>53cm</td></tr>
                        <tr style = 'background-color:#F0F0F0;'><td style = 'background-color:#C9C9C9;'>衣長</td><td>64cm</td><td>69cm</td><td>71cm</td><td>76cm</td></tr>
                    </table><br>
                    <img width = '250' src = 'https://fashionstw.com/wp-content/uploads/2021/02/%E6%AA%94%E6%A1%88_000-23-4.jpg'></img>
                </div><br>
                <a href = '#top'>回頁首</a>
            </h3>
        </center>
    </body>
</html>

<?php
    if (isset($_POST['reserve'])){
        if (isset($_POST['date'])){
            $temp = explode('-', implode(',', $_POST['date']));
            $today = explode('-', date('Y-m-d'));
            if ($temp[0] > $today[0] || ($temp[0] == $today[0] && ($temp[1] > $today[1] || ($temp[1] == $today[1] && $temp[2] > $today[2])))){
                header('trip.php#sign_up');
                echo '<script>alert("請勿輸入未來日期！")</script>';
            } else if ($today[0] - $temp[0] < 20 || ($today[0] - $temp[0] == 20 && ($today[1] < $temp[1] || ($today[1] == $temp[1] && $today[2] < $temp[2])))){
                header('trip.php#sign_up');
                echo '<script>alert("未滿20歲不得提交報名表單！")</script>';
            } else{
                session_unset();
                $_SESSION['end'] = 'true';
                $_SESSION['name'] = $_POST['name'];
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['tel'] = $_POST['tel'];
                $gender = $_POST['gender'];
                $gender = ($gender=='male') ? '男' :(($gender=='female') ? '女' : '其他');
                $_SESSION['gender'] = $gender;
                $food = $_POST['food'];
                if ($food != null){
                    for ($i = 0; $i < count($food); $i++){
                        $_SESSION['food'][$i] = $food[$i];
                }}
                $_SESSION['size'] = $_POST['size'];
                $color = implode(',',$_POST['color']);
                $_SESSION['color'] = $color;
                $_SESSION['date'] = implode(',', $_POST['date']);
                $_SESSION['number'] = $_POST['number'];
                $_SESSION['file'] = $_FILES['file'];
                $_SESSION['comment'] = $_POST['comment'];

                header('location:end.php');
                ob_end_flush();
            }
        }
    }
?>