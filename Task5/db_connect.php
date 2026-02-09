<!-- task4 -->
 <?php
$servername = "localhost";
$username = "username";  // اسم المستخدم في قاعدة البيانات
$password = "";  // كلمة المرور
$dbname = "my_database"; // اسم قاعدة البيانات

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
} else {
    echo "تم الاتصال بنجاح بقاعدة البيانات";
}

// إغلاق الاتصال
$conn->close();
?>
