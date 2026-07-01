<?php
$genders = ['m' => 'mala', 'f' => 'female', 'd' => 'don\'t prefer to say'];

$select = "<select name=\"genders\" id='Genders' class='form-control'>";
foreach ($genders as $ke => $value) {
    $select .= "<option value=\"$ke\">$value</option>";
}
$select .= "</select>";
?>
<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>

    <body>
        <label for="Genders">Genders</label>
        <!-- methob 1 -->
        <select name="genders" id="genders" class="form-control">
            <?php
            foreach ($genders as $ke => $value) {
                echo "<option value='$ke'>$value</option>";
            }
            ?>
        </select>

        <!-- method2 -->
        <?= $select; ?>

        <select name="" id="" class="form-control">
            <?php foreach ($genders as $ke => $value) { ?>
                <option value="<?= $ke ?>"> <?= $value ?></option>
            <?php } ?>
        </select>


        <!-- optional javascript -->
        <!-- jQuery fist, then popper.js, then Bootstrap Js -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>

</html>