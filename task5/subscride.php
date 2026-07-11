<!DOCTYPE html>
<html> 
<head>
    <title>subscribe</title>
    </head>
<body>
    <h2>culb subscribe</h2>
    <form action="Result.php" method="post">
        <label for="subscription">قيمة الاشتراك:</label>
        <input type="number" id="subscription" name="subscription" step="0.01" required>

        <label for="game1">سعر اللعبة 1:</label>
        <input type="number" id="game1" name="game1" step="0.01" required>

        <label for="game2">سعر اللعبة 2:</label>
        <input type="number" id="game2" name="game2" step="0.01" required>

        <label for="game3">سعر اللعبة 3:</label>
        <input type="number" id="game3" name="game3" step="0.01" required>

        <button type="submit">احسب النتيجة</button>
    </form>
</body>
</html>