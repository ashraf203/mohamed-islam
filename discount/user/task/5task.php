<form method="post" action="">
    <input type="number" name="arabic">arabic
    <input type="number" name="english">english
    <input type="number" name="prog">programing
    <input type="number" name="his">history

    <button type="submit">submit</button>
</form>

<?php

if ($_POST) {
    $arabic = trim($_POST['arabic'] ?? '');
    $english = trim($_POST['english'] ?? '');
    $prog = trim($_POST['prog'] ?? '');
    $his = trim($_POST['his'] ?? '');

    $total = $arabic + $english + $prog + $his;

    echo 'مجموع المواد ' . $total . ' من اصل 400 ';
}
