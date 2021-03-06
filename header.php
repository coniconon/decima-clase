<!DOCTYPE html>
<html lang="es">
<?php
$title = "THE GENDER GAP";
$description = "Gender Gap - Constanza Morales - DNO037";
$image = "https://raw.githubusercontent.com/profesorfaco/visualizaciones/master/images/homers-web-page.gif";
?>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo($title);?></title>
<meta name="description" content="<?php echo($description);?>">
<meta name="image" content="<?php echo($image);?>">
<meta itemprop="name" content="<?php echo($title);?>">
<meta itemprop="description" content="<?php echo($description);?>">
<meta itemprop="image" content="">
<meta name="og:title" content="<?php echo($title);?>">
<meta name="og:description" content="<?php echo($description);?>">
<meta name="og:image" content="<?php echo($image);?>">
<meta name="og:site_name" content="<?php echo($title);?>">
<meta name="og:locale" content="es_CL">
<meta name="og:type" content="website">
<link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat|Montserrat+Subrayada" rel="stylesheet">
<link href="libs/css/bootstrap.min.css" rel="stylesheet">
<link href="libs/css/style.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-10 col-md-offset-1">
<header>
<div class="masthead clearfix">
<div class="inner">
<h1 class="masthead-brand"><?php echo($title);?></h1>
<nav>
<ul class="nav masthead-nav">
<li<?php if((basename($_SERVER['PHP_SELF']))=='index.php'){?> class="active" <?php };?>><a href="index.php">Blog</a></li>
<li<?php if((basename($_SERVER['PHP_SELF']))=='visualizacion.php'){?> class="active" <?php };?>><a href="visualizacion.php">Visualization</a></li>
<li<?php if((basename($_SERVER['PHP_SELF']))=='faq.php'){?> class="active" <?php };?>><a href="faq.php">F.A.Q.</a></li>
</ul>
</nav>
</div>
</div>
</header>
