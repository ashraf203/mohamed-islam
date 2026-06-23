<?php

if ($_POST) {
    $number1 = trim($_POST['number1'] ?? '');

    if ($number1 > 0) {
        echo "الرقم موجب ";
    } elseif ($number1 < 0) {


        echo "الرقم سالب ";
    } else {
        echo "الرقم يساوي صفر";
    }
}
?>
<form method="post" action="">
    <input type="number" name="number1">
    <button type="submit">submit</button>
</form>