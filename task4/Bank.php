<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>حاسبة القرض</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        form { width: 320px; }
        input, button { display: block; margin: 8px 0; padding: 8px; width: 100%; }
        .result { margin-top: 20px; padding: 10px; border: 1px solid #ccc; background: #f9f9f9; }
    </style>
</head>
<body>
    <h2>حاسبة القرض البنكي</h2>

    <form method="post">
        <label>الاسم:</label>
        <input type="text" name="name" required>

        <label>مبلغ القرض:</label>
        <input type="number" name="loan" step="0.01" required>

        <label>عدد السنوات:</label>
        <input type="number" name="years" required>

        <label>نسبة الفائدة:</label>
        <input type="number" name="interest_rate" step="0.01" required>

        <button type="submit">احسب</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = trim($_POST['name'] ?? '');
        $loan = (float)($_POST['loan'] ?? 0);
        $years = (int)($_POST['years'] ?? 0);
        $interest_rate = (float)($_POST['interest_rate'] ?? 0);

        $interest_amount = $loan * $interest_rate / 100;
        $total_amount = $loan + $interest_amount;
        $monthly_installment = $years > 0 ? $total_amount / ($years * 12) : 0;

        echo "<div class='result'>";
        echo "<h3>نتيجة الحساب</h3>";
        echo "<p><strong>الاسم:</strong> $name</p>";
        echo "<p><strong>مبلغ القرض:</strong> " . number_format($loan, 2) . "</p>";
        echo "<p><strong>عدد السنوات:</strong> $years</p>";
        echo "<p><strong>نسبة الفائدة:</strong> " . number_format($interest_rate, 2) . "%</p>";
        echo "<p><strong>إجمالي الفائدة:</strong> " . number_format($interest_amount, 2) . "</p>";
        echo "<p><strong>إجمالي القرض:</strong> " . number_format($total_amount, 2) . "</p>";
        echo "<p><strong>القسط الشهري:</strong> " . number_format($monthly_installment, 2) . "</p>";
        echo "</div>";
    }
    ?>
</body>
</html>
