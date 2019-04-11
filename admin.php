<?php  

$login = $_POST['login'];
$pas = $_POST['password'];

if ($login == 'Volodya' && $pas == 1234)
  
  {
  session_start();
  $_SESSION['admin'] = true;
  $script = 'admin.php';
  }

else
$script = 'index.php';
header("Location: $script");

?>