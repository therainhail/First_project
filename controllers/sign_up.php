<?php
$auth_email="not";
$auth_name = "not";
$auth_pass = "not";
if(isset($_POST['auth_email'])) $auth_email = $_POST['auth_email'];
if(isset($_POST['auth_name'])) $auth_name = $_POST['auth_name'];
if(isset($_POST['auth_pass'])) $auth_pass = $_POST['auth_pass'];

print_r($_POST['auth_email']);
print_r($_POST['auth_name']);
print_r($_POST['auth_pass']);
?>

<?php 
if(isset($_POST['auth_email']) && isset($_POST['auth_name']) && isset($_POST['auth_pass'])) { ?>
	<p> Dannie bili prinyati</p>
<?php  header('Refresh: 10; url=http://localhost/index.php'); ?>
<?php } ?>