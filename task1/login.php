<?php
session_start();

$users = ['mohamed', 'ahmed', 'ali'];
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');

    if (in_array($username, $users, true)) {
        $_SESSION['username'] = $username;
        header('Location: profile.php');
        exit;
    }

    $error = 'اسم المستخدم غير موجود';
}
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>صفحة الدخول</title>
</head>
<body>
    <h1>صفحة الدخول</h1>
    <?php if (!empty($error)) : ?>
        <p style="color:red;"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>
    <form method="post">
        <label for="username">اسم المستخدم:</label>
        <input type="text" id="username" name="username" required>
        <br><br>
        <button type="submit">دخول</button>
    </form>
</body>
</html>