<?php
@session_start();
if(!isset($_SESSION['user_admin']))
{
  //  echo $_SESSION['fullname'];
    header("Location:login.php");
}