<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<!-- Your Basic Site Informations -->
	<title><?=$this->e($page_title);?></title>
	<meta charset="utf-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="robots" content="index, follow" />
	<meta name="description" content="<?=$this->e($page_desc);?>" />
	<meta name="keywords" content="<?=$this->e($page_key);?>" />
	<meta http-equiv="imagetoolbar" content="no" />
	<meta name="language" content="Indonesia" />
	<meta name="revisit-after" content="7" />
	<meta name="webcrawlers" content="all" />
	<meta name="rating" content="general" />
	<meta name="spiders" content="all" />

	<!-- Social Media Meta -->
	<?php include_once DIR_CON."/component/setting/meta_social.txt";?>

    <!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Bootstrap Core CSS -->
	<link href="<?=$this->asset('/css/bootstrap.min.css')?>" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="<?=$this->asset('/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">
	<link href="<?=$this->asset('/css/ionicons.min.css')?>" rel="stylesheet">
	<link href="<?=$this->asset('/css/main.css')?>" rel="stylesheet">
	<link href="<?=$this->asset('/css/style.css')?>" rel="stylesheet">
	<link href="<?=$this->asset('/css/responsive.css')?>" rel="stylesheet">
	<!-- Online Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,600,800,200,500' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600italic,400italic,300,300italic,600,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400italic,400,700' rel='stylesheet' type='text/css'>
	<!-- COLORS -->
	<link rel="stylesheet" id="color" href="<?=$this->asset('/css/colors/default.css')?>">
	<!-- JavaScripts -->
	<script src="<?=$this->asset('/js/modernizr.js')?>"></script>
	<!-- Favicons -->
	<link rel="shortcut icon" href="<?=BASE_URL.'/'.DIR_INC;?>/images/favicon.png" />
</head>
<body class="bg1-body">

<!-- Wrap -->
<div id="wrap" class="boxed-layout">
	<!-- Insert Header -->
	<?=$this->insert('header');?>

	<!-- Insert Content -->
	<?=$this->section('content');?>

	<!-- Insert Footer -->
	<?=$this->insert('footer');?>
<div class="rights">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p> © All Rights Reserved <span class="primary-color">IOD </span></p>
        </div>
        <div class="col-md-6 text-right">
            <?= $this->menu()->getFrontMenu('footer'); ?>
<!--            <a href="#.">Privacy Policy</a> <a href="#.">Terms & Conditions</a> -->
        </div>
      </div>
    </div>
  </div>
</div>
	<!-- Javascript -->
<script src="<?=$this->asset('/js/jquery-1.11.0.min.js')?>"></script>
<script src="<?=$this->asset('/js/bootstrap.min.js')?>"></script>
<script src="<?=$this->asset('/js/own-menu.js')?>"></script>
<script src="<?=$this->asset('/js/jquery.isotope.min.js')?>"></script>
<script src="<?=$this->asset('/js/jquery.flexslider-min.js')?>"></script>
<script src="<?=$this->asset('/js/jquery.countTo.js')?>"></script>
<script src="<?=$this->asset('/js/owl.carousel.min.js')?>"></script>
<script src="<?=$this->asset('/js/jquery.colio.min.js')?>"></script>
<script src="<?=$this->asset('/js/main.js')?>"></script>
</body>
</html>
