<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <title>حساب المجموع</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            direction: rtl;
            text-align: right;
            padding: 20px;
        }

        form {
            max-width: 400px;
            margin: auto;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 8px;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            cursor: pointer;
        }

        .result {
            max-width: 400px;
            margin: 20px auto;
            background: #f7f7f7;
            padding: 15px;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <?php
    $sum = null;
    $numbers = ['num1' => '', 'num2' => '', 'num3' => ''];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        foreach ($numbers as $key => $value) {
            $numbers[$key] = isset($_POST[$key]) ? (float) $_POST[$key] : 0;
        }
        $sum = $numbers['num1'] + $numbers['num2'] + $numbers['num3'];
    }
    ?>

    <h1>حساب المجموع</h1>
    <form method="post" action="">
        <label for="num1">الرقم الأول</label>
        <input type="number" id="num1" name="num1" value="<?= htmlspecialchars($numbers['num1']) ?>" step="any" required>

        <label for="num2">الرقم الثاني</label>
        <input type="number" id="num2" name="num2" value="<?= htmlspecialchars($numbers['num2']) ?>" step="any" required>

        <label for="num3">الرقم الثالث</label>
        <input type="number" id="num3" name="num3" value="<?= htmlspecialchars($numbers['num3']) ?>" step="any" required>

        <button type="submit">احسب المجموع</button>
    </form>

    <?php if ($sum !== null): ?>
        <div class="result">
            <h2>النتيجة</h2>
            <p>المجموع = <?= htmlspecialchars($sum) ?></p>
        </div>
    <?php endif; ?>
</body>

</html>