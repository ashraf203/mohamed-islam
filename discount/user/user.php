<?php

// arwe
// female , 1 , 0111111 , arwe@gmall.com
// seif
// male , 2 , 01222222 , seif@gmail.com
// aya
// female , 3 , 016666666 , aya@gameil.com
if ($_POST) {
    switch ($_POST['user']) {
        case 'Arwa':
            $name = $_POST['user'];
            $id = 1;
            $phone = "0111111";
            $email = "arwa@gmall.com";
            $gender = "female";
            break;
        case 'aya':
            $name = $_POST['user'];
            $id = 3;
            $phone = "016666666";
            $email = "aya@gameil.com";
            $gender = "female";
            break;
        default:
            $name = $_POST['user'];
            $id = 2;
            $phone = "01222222";
            $email = "seif@gmail.com";
            $gender = "male";
    }

    $message = "<div class='alert alert-danger'>
        <ul>
            <li>id : $id</li>
            <li>Name : $name</li>
            <li>email : $email</li>
            <li>phone : $phone</li>
            <li>gender : $gender</li>
        </ul>
    </div>";
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">User Info</h1>
        <form method="post">
            <div class="form-group">
                <label for="user">Select User</label>
                <select name="user" id="user" class="form-control">
                    <option value="Arwa">Arwa</option>
                    <option value="aya">aya</option>
                    <option value="seif">seif</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <?php if (isset($message)): ?>
            <?php echo $message; ?>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>