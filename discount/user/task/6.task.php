<form method="post" action="">
    <input type="number" name="number">
    <button type="submit">submit</button>
</form>

<?php

if ($_POST) {
    $number = floatval(trim($_POST['number'] ?? ''));
    if ($number < 50) {
        $cost = $number * 0.5;
    } elseif ($number >= 50 && $number < 100) {
        $cost = 0.75 * $number;
    } elseif ($number >= 100 && $number < 150) {
        $cost = 1.2 * $number;
    } elseif ($number >= 150) {
        $cost = 1.5 * $number;
    } else {
        $cost = 0;
    }
    echo $cost;
}
