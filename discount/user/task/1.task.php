<form method="post" action="">
    <input type="number" name="number1">
    <input type="number" name="number2">
    <input type="number" name="number3">
    <button type="submit">submit</button>
</form>
<?php

if ($_POST) {
    $number1 = trim($_POST['number1'] ?? '');
    $number2 = trim($_POST['number2'] ?? '');
    $number3 = trim($_POST['number3'] ?? '');

    if ($number1 > $number3 && $number1 > $number2) {
        echo " رقم " . $number1 . "  اكبر رقم فيهم";
    } elseif ($number2 > $number3 && $number2 > $number1) {
        echo " رقم " . $number2 . " اكبر رقم فيهم";
    } elseif ($number3 > $number1 && $number3 > $number1) {
        echo "رقم" . $number3 . "اكبر رقم فيهم";
    } else {
        echo " رقمين يساوي بعض";
    }
    if ($number1 < $number3 && $number1 < $number2) {
        echo " رقم " . $number1 . "  اصغر رقم فيهم";
    } elseif ($number2 < $number3 && $number2 < $number1) {
        echo " رقم " . $number2 . " اصغر رقم فيهم";
    } elseif ($number3 < $number1 && $number3 < $number1) {
        echo "رقم" . $number3 . "اصغر رقم فيهم";
    } else {
        echo " رقمين يساوي بعض";
    }
}
?>
