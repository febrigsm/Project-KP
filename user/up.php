<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BPPKA - Badan Pendapatan Pengelolaan Keuangan dan Aset</title>
    <!-- Bootstrap CSS -->    
    <link rel="stylesheet" href="bootstrap.min.css"/>
    
    <link href="css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- easy pie chart-->
    <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
	  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	  <link rel="stylesheet" href="css/fullcalendar.css">
	  <link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
	  <link href="css/xcharts.min.css" rel=" stylesheet">	
	  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">  
    <header class="header dark-bg">
      <div class="toggle-nav">
      <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo">BPP<span class="lite">KA</span></a>
      <!--logo end-->
      <div class="top-nav notification-row">                
      <!-- notificatoin dropdown start-->
      <ul class="nav pull-right top-menu">
      <!-- user login dropdown start-->
      </br>
      <span class="username">
        <?php 
        include '../header.php'; 
      ?>
      </span>
      </ul>
      <!-- notificatoin dropdown end-->
      </div>
    </header>      
    <!--header end-->
    <!--sidebar start-->
    <aside>
    <div id="sidebar"  class="nav-collapse ">
    <!-- sidebar menu start-->
    <ul class="sidebar-menu">                
      <li class="active">
        <a class="" href="index.php">
        <i class="icon_house_alt"></i>
        <span>Dashboard</span>
        </a>
     </li>
		 <li class="sub-menu">
        <a href="javascript:;" class="">
        <i class="icon_mail_alt"></i>
        <span>Surat Masuk</span>
        <span class="menu-arrow arrow_carrot-right"></span>
        </a>
        <ul class="sub">
          <li><a class="" href="RegSM.php">Register</a></li>                          
          <li><a class="" href="ListSM.php">List</a></li>
        </ul>
    </li>       
    <li class="sub-menu">
    <a href="javascript:;" class="">
    <i class="icon_mail_alt"></i>
    <span>Surat Keluar</span>
    <span class="menu-arrow arrow_carrot-right"></span>
    </a>
    <ul class="sub">
      <li><a class="" href="RegSK.php">Register</a></li>
      <li><a class="" href="ListSK.php">List</a></li>
    </ul>
    </li>
      </ul>
      <!-- sidebar menu end-->
      </div>
      </aside>
      <!--sidebar end-->
      
      <!--main content start-->
      <section id="main-content">
      <section class="wrapper">            
      <!--overview start-->
			<div class="row">
			<div class="col-lg-12">
	  	<h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
		  <ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href="index.php">Dashboard</a></li>						  	
					