<!-- task5 -->
<?php
$to = "email@example.com";  // البريد الإلكتروني للمستلم
$subject = "اختبار بريد إلكتروني";
$message = "هذه رسالة اختبار من PHP.";
$headers = "From: webmaster@example.com";

if (mail($to, $subject, $message, $headers)) {
    echo "تم إرسال البريد الإلكتروني بنجاح!";
} else {
    echo "فشل إرسال البريد الإلكتروني.";
}
?>
