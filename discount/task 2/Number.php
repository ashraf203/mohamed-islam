<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <title>إدخال رقم الهاتف</title>
</head>

<body>
    <form method="post" action="">
        <label for="phone">رقم الهاتف:</label>
        <input type="tel" id="phone" name="phone" placeholder="05XXXXXXXX" required>
        <button type="submit">إرسال</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $phone = trim($_POST['phone']);

        // تحقق بسيط من صيغة رقم الهاتف
        if (preg_match('/^05\d{8}$/', $phone)) {
            echo "<p>رقم الهاتف المدخل: " . htmlspecialchars($phone) . "</p>";
        } else {
            echo "<p>يرجى إدخال رقم هاتف صحيح بصيغة 05XXXXXXXX.</p>";
        }
    }
    ?>
</body>

</html>