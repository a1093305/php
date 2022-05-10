<?php
    require('conn.php');
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    date_default_timezone_set('Asia/Taipei');

    $mail = new PHPMailer(true);

    function send_mail($mail_address, $name, $subject, $body)
    {
        global $mail;
        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'for.php.2022@gmail.com';
            $mail->Password   = 'nukphp2022';
            $mail->SMTPSecure = 'ssl';
            $mail->Port       = 465;
            $mail->CharSet = "utf-8";

            $mail->setFrom('for.php.2022@gmail.com', 'phpTest');
            $mail->AddAddress($mail_address, $name);
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = '本期電子報如下：<br>'.nl2br($body);

            if(!$mail->Send()) {
                echo "Error: ".$mail->ErrorInfo."<br>";
            } else {
                echo "Send To: ".$mail_address."<br>";
            }
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}<br><br>";
        }
    }
?>
<html>
    <head>
        <title>電子報統一發送</title>
    </head>
    <body align = 'center'>
        <?php
            if (isset($_POST['submit'])){
                $SQL = "SELECT * FROM subscribe";
                echo '已寄出電子報給下列用戶：<br>';
                if ($result = mysqli_query($conn, $SQL)){
                    while ($row = mysqli_fetch_assoc($result)){
                        $user = $row['email'];
                        echo $user.'<br>';
                        send_mail($user, '訂閱者', $_POST['subject'], $_POST['content']);
                    }
                }
                unset($_POST['submit']);
            } else{
                echo "
                <h1>發送電子報</h1>
                <table align = center><form action = '' method = 'post'>
                    <tr><td>主題：</td><td><input type = 'text' name = 'subject' size = 58 required></td></tr>
                    <tr><td>內容：</td><td><textarea name = 'content' cols = 60 rows = 30></textarea></td></tr>
                </table>
                <input type = 'submit' name = 'submit'>
                ";
            }
        ?>
    </body>
</html>