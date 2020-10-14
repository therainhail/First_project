<?php
$auth_email="not";
$auth_name = "not";
$auth_pass = "not";
if(isset($_POST['auth_email'])) $auth_email = $_POST['auth_email'];
if(isset($_POST['auth_name'])) $auth_name = $_POST['auth_name'];
if(isset($_POST['auth_pass'])) $auth_pass = $_POST['auth_pass'];

if(isset($_POST['auth_email']) and ($_POST['auth_name']) and ($_POST['auth_pass']));
header('Location: ../index.php');
);

print_r($_POST['auth_email']);
print_r($_POST['auth_name']);
print_r($_POST['auth_pass']);

?>