<?php
$auth_name = "not";
$auth_pass = "not";
if(isset($_POST['auth_name'])) $auth_name = $POST['auth_name'];
if(isset($_POST['auth_pass'])) $auth_pass = $POST['auth_pass'];

print_r($_POST['$auth_name']);
print_r($_POST['$auth_pass']);
?>