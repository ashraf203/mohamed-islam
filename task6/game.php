<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حساب اشتراك النادي</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            direction: rtl;
            text-align: right;
            padding: 20px;
            background: #f4f4f4;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            padding: 10px 16px;
            border: none;
            background: #0066cc;
            color: #fff;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
        }
        .result {
            margin-top: 20px;
            padding: 16px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background: #f9f9f9;
        }
        .error {
            color: #d8000c;
        }
    </style>
</head>
<body>
    <?php
    $name = $_POST['name'] ?? '';
    $families = $_POST['families'] ?? '';
    $message = '';
    $error = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = trim($name);
        $families = trim($families);

        if ($name === '') {
            $error = 'من فضلك ادخل اسم العميل.';
        } elseif ($families === '' || !ctype_digit($families) || (int)$families <= 0) {
            $error = 'من فضلك ادخل عدد أسر صحيح أكبر من صفر.';
        } else {
            $familiesCount = (int) $families;
            $pricePerFamily = 500;
            $total = $familiesCount * $pricePerFamily;

            $message = "<strong>اسم العميل:</strong> " . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . "<br>" .
                       "<strong>عدد الأسر:</strong> {$familiesCount}<br>" .
                       "<strong>قيمة الاشتراك الإجمالية:</strong> {$total} ريال";
        }
    }
    ?>

    <div class="container">
        <h1>حساب اشتراك النادي</h1>
        <form method="post" action="">
            <label for="name">اسم العميل:</label>
            <input type="text" id="name" name="name" value="<?= htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>" required>

            <label for="families">عدد الأسر:</label>
            <input type="number" id="families" name="families" min="1" value="<?= htmlspecialchars($families, ENT_QUOTES, 'UTF-8') ?>" required>

            <button type="submit">احسب الاشتراك</button>
        </form>

        <?php if ($error !== ''): ?>
            <div class="result error"><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></div>
        <?php elseif ($message !== ''): ?>
            <div class="result"><?= $message ?></div>
        <?php endif; ?>
    </div>
</body>
</html>
