<?php
	session_start();
	if (isset($_SESSION['level'])){
		if ($_SESSION['level'] == "admin"){   
			header("location:./admin/index.php");
		}else if ($_SESSION['level'] == "user"){
			header('location:./user/index.php');
		}
	}
	if (!isset($_SESSION['level'])){
?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/avatar.jpg">

    <title>BPPKA - Badan Pendapatan Pengelolaan Keuangan dan Aset</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
</head>
<body class="login-img3-body">
<?php include 'header.php'; ?>
    
</body>
</html>
<?php
    }
 ?>