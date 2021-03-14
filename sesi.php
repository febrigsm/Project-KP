<?php
  session_start();
  if(!isset($_SESSION['USERNAME'])){
      header("location:index.php");
  }
  
  if($_SESSION['LEVEL']!="admin"){
      die("This page can't be access");
  }
?>