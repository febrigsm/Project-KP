<?php
  session_start();
  if(!isset($_SESSION['username'])){
      header("location:index.php");
  }
  
  if($_SESSION['level']!="user"){
      die("This page can't be access");
  }
?>