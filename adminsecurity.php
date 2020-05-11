<?php
include('mainsecurity.php');

if(isset($_POST['login_btn']))
{
  $login_username = $_POST['username'];
  $login_password = $_POST['password'];

  $query = "SELECT * FROM admin WHERE username='$login_username' AND password='$login_password'";
  $query_run = mysqli_query($conn,$query);

  if(mysqli_fetch_array($query_run))
  {
      $_SESSION['username']=$login_username;
      ob_start();
      header('Location: ./adminoverview.php');
      exit();
  }
  else
  {
      $_SESSION['status'] = 'USERNAME OR PASSWORD IS INVALID';
      ob_start();
      header('Location: ./Admin.php');
      exit();
  }
}
