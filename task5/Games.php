<?php
$name = $_POST['name'] ?? '';
$members = $_POST['members'] ?? '';
$message = '';
$results = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($name);
    $members = trim($members);

    if ($name === '' || $members === '') {
        $message = 'من فضلك ادخل الاسم وعدد افراد الاسرة.';
    } elseif (!ctype_digit($members) || (int)$members < 1) {
        $message = 'عدد افراد الاسرة لازم يكون رقم صحيح اكبر من صفر.';
    } else {
        $count = (int)$members;
        for ($i = 1; $i <= $count; $i++) {
            $results[] = "الفرد $i: $name";
        }
        $message = "تم عرض الاسم لكل فرد في الاسرة.";
    }
}
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>عرض الاسم لكل فرد</title>
    <style>
        body { font-family: Arial, sans-serif; direction: rtl; padding: 20px; }
        label { display: block; margin-bottom: 10px; }
        input[type="text"], input[type="number"] { width: 100%; padding: 8px; margin-top: 4px; box-sizing: border-box; }
        button { padding: 10px 16px; margin-top: 10px; }
        .message { margin-top: 20px; padding: 12px; background: #f0f0f0; border: 1px solid #ccc; }
        .results { margin-top: 20px; padding: 12px; background: #fff; border: 1px solid #ddd; }
    </style>
</head>
<body>
    <h1>ادخل الاسم وعدد افراد الاسرة</h1>
    <form method="post" action="">
        <label>
            الاسم:
            <input type="text" name="name" value="<?= htmlspecialchars($name) ?>" required>
        </label>

        <label>
            عدد افراد الاسرة:
            <input type="number" name="members" value="<?= htmlspecialchars($members) ?>" min="1" required>
        </label>

        <button type="submit">عرض لكل فرد</button>
    </form>

    <?php if ($message !== ''): ?>
        <div class="message"><?= htmlspecialchars($message) ?></div>
    <?php endif; ?>

    <?php if (!empty($results)): ?>
        <div class="results">
            <h2>النتيجة:</h2>
            <ul>
                <?php foreach ($results as $result): ?>
                    <li><?= htmlspecialchars($result) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
</body>
</html>
