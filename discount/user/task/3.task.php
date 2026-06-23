<form method="post" action="">
    <input type="number" name="number">
    <button type="submit">submit</button>
</form>

<?php

if ($_POST) {
    $input = trim($_POST['number'] ?? '');
    $number = $input ** (1 / 2);
    echo $number;
}
