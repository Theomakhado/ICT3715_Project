<?php
// Start the session
session_start();
include('../include/conn_db.php');

// Validating Session
if(strlen($_SESSION['email'])==0){
header('location:../login_examDept.php');
}
?>

<!DOCTYPE html>
<html>
<head>
<title>OES | <?php echo $title;?></title>
<link rel="shortcut icon" type="image/ico" href="../img/favicon.ico"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- css -->
<link href="../css/bootstrap.min.css" rel="stylesheet" media="screen" type='text/css' />
<link href="../css/style.css" rel="stylesheet" media="screen" type='text/css' />
<link href="../color/default.css" rel="stylesheet" media="screen" type='text/css' />
<link href="../color/animate.css" rel="stylesheet" media="screen" type='text/css' />
<link href="../color/dlmenu.css" rel="stylesheet" media="screen" type='text/css' />
<script src="../js/modernizr.custom.js"></script>
<script src="../js/daypilot/daypilot-all.min.js" type="text/javascript"></script>
<!-- Step 1 - Include the fusioncharts core library -->
<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
<!-- Step 2 - Include the fusion theme -->
<script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>

</head>

<body>
<div class="menu-area">
<div id="dl-menu" class="dl-menuwrapper">
<button class="dl-trigger">Open Menu</button>
<ul class="dl-menu">
<li><a accesskey='1' href="index.php">Dashboard</a></li>
<li><a accesskey='2' href="rp1.php">Report 1</a></li>
<li><a accesskey='3' href="rp2.php">Report 2</a></li>
<li><a accesskey='4' href="rp3.php">Report 3</a></li>
<li><a accesskey='5' href="rp4.php">Report 4</a></li>
<li><a accesskey='6' href="mis1.php">MIS Report 1</a></li>
<li><a accesskey='7' href="mis2.php">MIS Report 2</a></li>
<li><a accesskey='8' href="mis3.php">MIS Report 3</a></li>
<li>
<a href="#">Sub Menu</a>
<ul class="dl-submenu">
<li><a accesskey='p' href="prf.php">Profile</a></li>
<li><a accesskey='l' href="logout.php">Logout</a></li>
</ul>
</li>
</ul>
</div>
<!-- /dl-menuwrapper -->
</div>

<img src='../img/logo.png' class='img-responsive' width='100%' height="100px"/>