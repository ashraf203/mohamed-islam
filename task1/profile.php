<?php
session_start();

if (empty($_SESSION['username'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>الملف الشخصي</title>
</head>
<body>
    <h1>مرحبا <?= htmlspecialchars($_SESSION['username']) ?></h1>
    <p>أنت الآن في صفحة الملف الشخصي.</p>
    <a href="logout.php">
        <button type="button">تسجيل خروج</button>
    </a>
</body>
</html>