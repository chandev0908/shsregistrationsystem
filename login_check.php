<?php
	session_start();

	require('connection.php');
if ($loginType == "admin") {
  if ($name == "admin" && $pass == "indra") {
    $_SESSION['user']=$name;
    $_SESSION['pass']=$pass;
    $_SESSION['login']=$loginType;
    header('Location:'.$loginType.'.php');
    exit();
  }
  else {
    $_SESSION['error']="Username or Password is wrong";
    header('Location:index.php');
    exit();
  }
}
?>
