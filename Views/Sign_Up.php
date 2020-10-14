<?php
if(!defined("IN_ADMIN")) die;
// Start session
session_start();
// Помещаем содержимое файла в массив
$access = array();
$access = file("access.php");
// Разносим значения по переменным – пропуская первую строку файла - 0
$login = trim($access[1]);
$passw = trim($access[2]);
// Проверям были ли посланы данные
if(!empty($_POST['enter']))
{
	$_SESSION['login']= $_POST['login'];
	$_SESSION['passw']= $_POST['passw'];
}
// Если ввода не было, или они не верны
// просим их ввести
if(empty($_SESSION['login']) or 
	$login != $_SESSION['login'] or
   	$passw != $_SESSION['passw']    )
{
	?>

	  <form class="form_auth_style" style="
    display: grid;
    grid-template-rows: 1fr 1fr 1fr 1fr 1fr;
    width: 50%;
    border: 1px solid black;"action="#" method="post" >
      <label align="center">Your Name</label>
      <input type="name" name="auth_name" placeholder="Your Name" required>
      <label align="center" >Your Password</label>
      <input type="password" name="auth_pass" placeholder="Your Password" required >
      <button class="form_auth_button" type="submit" name="form_auth_submit">Sign In</button>
    </form>
    <?php
    die;
}
?>