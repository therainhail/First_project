<?php
$auth_email="not";
$auth_name = "not";
$auth_pass = "not";
if(isset($_POST['auth_email'])) $auth_email = $POST['auth_email'];
if(isset($_POST['auth_name'])) $auth_name = $POST['auth_name'];
if(isset($_POST['auth_pass'])) $auth_pass = $POST['auth_pass'];

print_r($_POST['auth_email']);
print_r($_POST['auth_name']);
print_r($_POST['auth_pass']);
$myfile= fopen("newfile.txt","w") or die("U");
fwrite($myfile, $_POST['auth_email']);
fwrite($myfile, $_POST['auth_name']);
fwrite($myfile, $_POST['auth_pass']);
fclose($myfile);
?>