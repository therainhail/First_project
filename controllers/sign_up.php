<?php
$auth_email="not";
$auth_name = "not";
$auth_pass = "not";
if(isset($_POST['auth_email'])) $auth_email = $POST['auth_email'];
if(isset($_POST['auth_name'])) $auth_name = $POST['auth_name'];
if(isset($_POST['auth_pass'])) $auth_pass = $POST['auth_pass'];

$filename = 'data.txt';
$f_hdl = fopen($filename, 'w');
fwrite($f_hdl, $auth_email);
fwrite($f_hdl, $auth_name);
fwrite($f_hdl, $auth_pass);
fclose($f_hdl);


print_r($_POST['auth_email']);
print_r($_POST['auth_name']);
print_r(Ваш пароль: $_POST['auth_pass']);
?>