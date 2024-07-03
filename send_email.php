<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST["message"];

    // 配置发件邮箱和密码
    $from_email = "3759713693@qq.com";
    $password = "114514";

    // 收件邮箱
    $to_email = "3759713693@qq.com";

    // 邮件主题
    $subject = "用户发送的信息";

    // 邮件正文
    $body = $message;

    // 发送邮件
    $headers = "From: $from_email";

    if (mail($to_email, $subject, $body, $headers)) {
        echo "邮件发送成功";
    } else {
        echo "邮件发送失败";
    }
}
?>
