<?php
// تحقق من إرسال البيانات عبر POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // تحقق من صحة البيانات
    if ($username == "admin" && $password == "1234") {
        echo "تم تسجيل الدخول بنجاح!";
    } else {
        echo "اسم المستخدم أو كلمة المرور غير صحيحة!";
    }
}
?>

<!-- نموذج HTML -->
<form method="post" action="">
    <label for="username">اسم المستخدم:</label>
    <input type="text" name="username" required><br><br>
    
    <label for="password">كلمة المرور:</label>
    <input type="password" name="password" required><br><br>
    
    <input type="submit" value="تسجيل الدخول">
</form>
