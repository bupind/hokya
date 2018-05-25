<!DOCTYPE html>
<html lang="zxx" class="boxed">
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

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,400,500,600,700,900%7COpen+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?=$this->asset('/vendor/bootstrap/css/bootstrap.min.css')?>">
		<link rel="stylesheet" href="<?=$this->asset('/vendor/font-awesome/css/fontawesome-all.min.css')?>">
		<link rel="stylesheet" href="<?=$this->asset('/vendor/animate/animate.min.css')?>">
		<link rel="stylesheet" href="<?=$this->asset('/vendor/linear-icons/css/linear-icons.min.css')?>">
		<link rel="stylesheet" href="<?=$this->asset('/vendor/owl.carousel/assets/owl.carousel.min.css')?>">
		<link rel="stylesheet" href="<?=$this->asset('/vendor/owl.carousel/assets/owl.theme.default.min.css')?>">
		<link rel="stylesheet" href="<?=$this->asset('/vendor/magnific-popup/magnific-popup.min.css')?>">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?=$this->asset('/css/theme.css')?>">
		<link rel="stylesheet" href="<?=$this->asset('/css/theme-elements.css')?>">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="<?=$this->asset('/vendor/rs-plugin/css/settings.css')?>">
		<link rel="stylesheet" href="<?=$this->asset('/vendor/rs-plugin/css/layers.css')?>">
		<link rel="stylesheet" href="<?=$this->asset('/vendor/rs-plugin/css/navigation.css')?>">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?=$this->asset('/css/skins/default.css')?>">
		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?=$this->asset('/css/custom.css')?>">

		<!-- Head Libs -->
		<script src="<?=$this->asset('/vendor/modernizr/modernizr.min.js')?>"></script>

	</head>
	<body>
		<div class="body">
	<!-- Insert Header -->
	<?=$this->insert('header');?>

	<div role="main" class="main">
	<?=$this->section('content');?>
	</div>

	<!-- Insert Footer -->
	<?=$this->insert('footer');?>
</div>

		<!-- Vendor -->
		<script src="<?=$this->asset('/vendor/jquery/jquery.min.js')?>"></script>
		<script src="<?=$this->asset('/vendor/jquery.appear/jquery.appear.min.js')?>"></script>
		<script src="<?=$this->asset('/vendor/jquery.easing/jquery.easing.min.js')?>"></script>
		<script src="<?=$this->asset('/vendor/jquery-cookie/jquery-cookie.min.js')?>"></script>
		<script src="<?=$this->asset('/vendor/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
		<script src="<?=$this->asset('/vendor/common/common.min.js')?>"></script>
		<script src="<?=$this->asset('/vendor/jquery.validation/jquery.validation.min.js')?>"></script>
		<script src="<?=$this->asset('/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js')?>"></script>
		<script src="<?=$this->asset('/vendor/jquery.gmap/jquery.gmap.min.js')?>"></script>
		<script src="<?=$this->asset('/vendor/jquery.lazyload/jquery.lazyload.min.js')?>"></script>
		<script src="<?=$this->asset('/vendor/isotope/jquery.isotope.min.js')?>"></script>
		<script src="<?=$this->asset('/vendor/owl.carousel/owl.carousel.min.js')?>"></script>
		<script src="<?=$this->asset('/vendor/magnific-popup/jquery.magnific-popup.min.js')?>"></script>
		<script src="<?=$this->asset('/vendor/vide/vide.min.js')?>"></script>
		<script src="<?=$this->asset('/vendor/vivus/vivus.min.js')?>"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?=$this->asset('/js/theme.js')?>"></script>
		
		<!-- Current Page Vendor and Views -->
		<script src="<?=$this->asset('/vendor/rs-plugin/js/jquery.themepunch.tools.min.js')?>"></script>		
		<script src="<?=$this->asset('/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')?>"></script>
		
		<!-- Theme Custom -->
		<script src="<?=$this->asset('/js/custom.js')?>"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?=$this->asset('/js/theme.init.js')?>"></script>

		<!-- Examples -->
		<script src="<?=$this->asset('/js/examples/examples.lightboxes.js')?>"></script>	
	</body>
</html>
