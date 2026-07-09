<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <title>عرض الاستبيان</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            direction: rtl;
            text-align: right;
            padding: 20px;
        }

        form {
            max-width: 600px;
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

        input[type="text"],
        select,
        textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        .radio-group,
        .checkbox-group {
            margin-top: 10px;
        }

        .radio-group label,
        .checkbox-group label {
            display: inline-block;
            margin-right: 15px;
            font-weight: normal;
        }

        button {
            margin-top: 20px;
            padding: 10px 20px;
            cursor: pointer;
        }

        .result {
            max-width: 600px;
            margin: 20px auto;
            background: #f7f7f7;
            padding: 15px;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <?php
    $submitted = $_SERVER['REQUEST_METHOD'] === 'POST';
    $name = $age = $gender = $rating = $comments = '';
    $interests = [];

    if ($submitted) {
        $name = trim($_POST['name'] ?? '');
        $age = $_POST['age'] ?? '';
        $gender = $_POST['gender'] ?? '';
        $rating = $_POST['rating'] ?? '';
        $comments = trim($_POST['comments'] ?? '');
        $interests = $_POST['interests'] ?? [];
    }
    ?>

    <h1>استبيان رأيك</h1>

    <?php if ($submitted && $name !== ''): ?>
        <div class="result">
            <h2>شكراً لمشاركتك!</h2>
            <p><strong>الاسم:</strong> <?= htmlspecialchars($name) ?></p>
            <p><strong>الفئة العمرية:</strong> <?= htmlspecialchars($age) ?></p>
            <p><strong>الجنس:</strong> <?= htmlspecialchars($gender) ?></p>
            <p><strong>تقييم الخدمة:</strong> <?= htmlspecialchars($rating) ?>/5</p>
            <p><strong>اهتماماتك:</strong> <?= count($interests) ? htmlspecialchars(implode('، ', $interests)) : 'لم يتم اختيار أي منها' ?></p>
            <p><strong>ملاحظات إضافية:</strong> <?= $comments !== '' ? nl2br(htmlspecialchars($comments)) : 'بدون ملاحظات' ?></p>
        </div>
    <?php endif; ?>

    <form method="post" action="">
        <label for="name">الاسم</label>
        <input type="text" id="name" name="name" required value="<?= htmlspecialchars($name) ?>">

        <label for="age">الفئة العمرية</label>
        <select id="age" name="age" required>
            <option value="">اختر الفئة</option>
            <option value="أقل من 18" <?= $age === 'أقل من 18' ? 'selected' : '' ?>>أقل من 18</option>
            <option value="18-25" <?= $age === '18-25' ? 'selected' : '' ?>>18-25</option>
            <option value="26-35" <?= $age === '26-35' ? 'selected' : '' ?>>26-35</option>
            <option value="36-45" <?= $age === '36-45' ? 'selected' : '' ?>>36-45</option>
            <option value="أكثر من 45" <?= $age === 'أكثر من 45' ? 'selected' : '' ?>>أكثر من 45</option>
        </select>

        <label>الجنس</label>
        <div class="radio-group">
            <label><input type="radio" name="gender" value="ذكر" <?= $gender === 'ذكر' ? 'checked' : '' ?>> ذكر</label>
            <label><input type="radio" name="gender" value="أنثى" <?= $gender === 'أنثى' ? 'checked' : '' ?>> أنثى</label>
            <label><input type="radio" name="gender" value="آخر" <?= $gender === 'آخر' ? 'checked' : '' ?>> آخر</label>
        </div>

        <label>ما الذي يهمك في الموقع؟</label>
        <div class="checkbox-group">
            <label><input type="checkbox" name="interests[]" value="سهولة الاستخدام" <?= in_array('سهولة الاستخدام', $interests) ? 'checked' : '' ?>> سهولة الاستخدام</label>
            <label><input type="checkbox" name="interests[]" value="السرعة" <?= in_array('السرعة', $interests) ? 'checked' : '' ?>> السرعة</label>
            <label><input type="checkbox" name="interests[]" value="التصميم" <?= in_array('التصميم', $interests) ? 'checked' : '' ?>> التصميم</label>
        </div>

        <label>كيف تقيم تجربتك معنا؟</label>
        <div class="radio-group">
            <label><input type="radio" name="rating" value="1" <?= $rating === '1' ? 'checked' : '' ?>> 1</label>
            <label><input type="radio" name="rating" value="2" <?= $rating === '2' ? 'checked' : '' ?>> 2</label>
            <label><input type="radio" name="rating" value="3" <?= $rating === '3' ? 'checked' : '' ?>> 3</label>
            <label><input type="radio" name="rating" value="4" <?= $rating === '4' ? 'checked' : '' ?>> 4</label>
            <label><input type="radio" name="rating" value="5" <?= $rating === '5' ? 'checked' : '' ?>> 5</label>
        </div>

        <label for="comments">ملاحظات إضافية</label>
        <textarea id="comments" name="comments" rows="4"><?= htmlspecialchars($comments) ?></textarea>

        <button type="submit">إرسال الاستبيان</button>
    </form>
</body>

</html>