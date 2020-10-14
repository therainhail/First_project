<?php
$auth_email="not";
$auth_name = "not";
$auth_pass = "not";
if(isset($_POST['auth_email'])) $auth_email = $POST['auth_email'];
if(isset($_POST['auth_name'])) $auth_name = $POST['auth_email'];
if(isset($_POST['auth_pass'])) $auth_pass = $POST['auth_email'];

print_r($_POST['auth_email']);
print_r($_POST['auth_name']);
print_r(Ваш пароль: $_POST['auth_pass']);
?>