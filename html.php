<?php
$page = "<h1 style='color:blue;'>Hello</h1> <a href='print.php'> print .php </a> <script> alert('ok'); </script>";
$name = "world";
echo $page;
?>

<h1><?php echo $name; ?></h1>

<h1>NTI</h1>

<?php
$options = "<option>male</option><option>female</option>";
echo "<select>" . $options . $options . "</select>";
echo "<select>" . $options . "</select>";
?>