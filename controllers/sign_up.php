<?php
$auth_email="not";
$auth_name = "not";
$auth_pass = "not";
if(isset($_POST['auth_email'])) $auth_email = $_POST['auth_email'];
if(isset($_POST['auth_name'])) $auth_name = $_POST['auth_name'];
if(isset($_POST['auth_pass'])) $auth_pass = $_POST['auth_pass'];

if(!empty($auth_email) && !empty($auth_name) && !empty($auth_pass)) {
	header('url = http://localhost/index.php');
}

print_r($_POST['auth_email']);
print_r($_POST['auth_name']);
print_r($_POST['auth_pass']);

?>