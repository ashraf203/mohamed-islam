<?php
$subscription = $_POST['subscription'] ?? '';
$game1 = $_POST['game1'] ?? '';
$game2 = $_POST['game2'] ?? '';
$game3 = $_POST['game3'] ?? '';
$message = '';
$total = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $subscription = trim($subscription);
    $game1 = trim($game1);
    $game2 = trim($game2);
    $game3 = trim($game3);

    if ($subscription === '' || $game1 === '' || $game2 === '' || $game3 === '') {
        $message = 'من فضلك ادخل قيمة الاشتراك واسعار الالعاب الثلاثة.';
    } elseif (!is_numeric($subscription) || !is_numeric($game1) || !is_numeric($game2) || !is_numeric($game3)) {
        $message = 'ادخل ارقام صحيحة في جميع الحقول.';
    } else {
        $subscription = floatval($subscription);
        $game1 = floatval($game1);
        $game2 = floatval($game2);
        $game3 = floatval($game3);
        $gamesTotal = $game1 + $game2 + $game3;
        $total = $subscription + $gamesTotal;
        $message = "الاشتراك: $subscription, مجموع الالعاب: $gamesTotal, الاجمالي: $total";
    }
}
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>حساب الاشتراك ومجموع الالعاب</title>
    <style>
        body { font-family: Arial, sans-serif; direction: rtl; padding: 20px; }
        label { display: block; margin-bottom: 10px; }
        input[type="text"], input[type="number"] { width: 100%; padding: 8px; margin-top: 4px; box-sizing: border-box; }
        button { padding: 10px 16px; margin-top: 10px; }
        .message { margin-top: 20px; padding: 12px; background: #f0f0f0; border: 1px solid #ccc; }
    </style>
</head>
<body>
    <h1>حساب الاشتراك ومجموع الالعاب</h1>
    <form method="post" action="">
        <label>
            قيمة الاشتراك:
            <input type="number" name="subscription" value="<?= htmlspecialchars($subscription) ?>" min="0" step="0.01" required>
        </label>

        <label>
            سعر اللعبة 1:
            <input type="number" name="game1" value="<?= htmlspecialchars($game1) ?>" min="0" step="0.01" required>
        </label>

        <label>
            سعر اللعبة 2:
            <input type="number" name="game2" value="<?= htmlspecialchars($game2) ?>" min="0" step="0.01" required>
        </label>

        <label>
            سعر اللعبة 3:
            <input type="number" name="game3" value="<?= htmlspecialchars($game3) ?>" min="0" step="0.01" required>
        </label>

        <button type="submit">احسب النتيجة</button>
    </form>

    <?php if ($message !== ''): ?>
        <div class="message">
            <?= htmlspecialchars($message) ?>
        </div>
    <?php endif; ?>
</body>
</html>
