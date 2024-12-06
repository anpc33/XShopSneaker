<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Email</title>
</head>

<body>

    <form method="post">
        <button type="submit" name="send">Send Email</button>
    </form>

    <?php
    // Include PHPMailer
    require_once __DIR__ . '/PHPMailer/src/Exception.php';
    require_once __DIR__ . '/PHPMailer/src/PHPMailer.php';
    require_once __DIR__ . '/PHPMailer/src/SMTP.php';

    // Kiểm tra khi người dùng bấm nút "Send Email"
    if (isset($_POST['send'])) {
        try {
            // Khởi tạo đối tượng PHPMailer
            $mail = new PHPMailer\PHPMailer\PHPMailer();
            $mail->isSMTP(); // Sử dụng SMTP
            $mail->SMTPDebug = 2; // Hiển thị debug (có thể tắt sau)
            $mail->SMTPAuth = true; // Bật xác thực SMTP
            $mail->SMTPSecure = 'ssl'; // Sử dụng mã hóa SSL
            $mail->Host = "smtp.gmail.com"; // SMTP server
            $mail->Port = 465; // Cổng SMTP (465 cho SSL, 587 cho TLS)

            // Thông tin tài khoản Gmail
            $mail->Username = "adadisfpt@gmail.com"; // Địa chỉ email
            $mail->Password = "ptxyashxentyecql"; // Mật khẩu ứng dụng

            // Thông tin người gửi
            $mail->setFrom("adadisfpt@gmail.com", "Adadis X Shop");

            // Thông tin người nhận
            $mail->addAddress("ancqph51578@gmail.com");

            // Nội dung email
            $mail->isHTML(true);
            $mail->Subject = "Test Email";
            $mail->Body = "Hello World!";

            // Gửi email
            if ($mail->send()) {
                echo "Message has been sent successfully!";
            } else {
                echo "Mailer Error: " . $mail->ErrorInfo;
            }
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
    ?>

</body>

</html>
