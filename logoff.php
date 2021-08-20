<?php
/*
session_start();

echo '<pre>';
print_r($_SESSION);
echo '<pre/>';


unset($_SESSION['x']);
//remove o erro apenas se existir
echo '<pre>';
print_r($_SESSION);
echo '<pre/>';


session_destroy();
echo '<pre>';
print_r($_SESSION);
echo '<pre/>';*/

session_destroy();
header('location: index.php')




?>