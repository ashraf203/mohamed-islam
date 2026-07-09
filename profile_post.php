<?php
session_start();
// if the request method is get
if (empty($_POST)) {
    header('location:../mohamed-islam/errors/404.php');
    die;
}

print_r($_POST);
die;
// validation
$errors = [];
if (empty($_POST['name'])) {
    $errors['name'] = "<div class='alert alert-danger'>name is required</div>";
}

if (empty($_POST['email'])) {
    $errors['email'] = "<div class='alert alert-danger'>email is required</div>";
}

if (empty($_POST['password'])) {
    $errors['password'] = "<div class='alert alert-danger'>password is required</div>";
}
// if no validation errors
if (empty($errors)) {
    // update the session with the new data
    $_SESSION['user']->name = $_POST['name'];
    $_SESSION['user']->email = $_POST['email'];
    $_SESSION['user']->gender = $_POST['gender'];
}

$_SESSION['errors'] = $Errors;
header('locaetion:../profile.php');
die;
