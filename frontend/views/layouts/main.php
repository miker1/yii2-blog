<?php

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
	<!-- META TAGS -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	<meta name="author" content="Amine Akhouad">
	<meta name="description" content="AKAD is a creative and modern template for digital agencies">

	<?php $this->head() ?>
</head>
<body class="animsition">
<?php $this->beginBody() ?>
	<!-- HEADER  -->
	<header class="main-header">
		<div class="container">
			<div class="logo">
				<a href="index.html"><img src="img/logo.png" alt="logo"></a>
			</div>

			<div class="menu">
				<!-- desktop navbar -->
				<nav class="desktop-nav">
					<ul class="first-level">
						<li><a href="index.php" class="animsition-link">Home</a></li>
						<li><a href="about" class="animsition-link">about us</a></li>
						<li><a href="contact" class="animsition-link">services</a></li>
						<li><a href="">portfolio</a>
							<ul class="second-level">
								<li><a href="portfolio-1.html" class="animsition-link">portfolio list</a></li>
								<li><a href="single-project.html" class="animsition-link">single project 1</a></li>
								<li><a href="single-project-2.html" class="animsition-link">single project 2</a></li>
							</ul>
						</li>
						<li><a href="">blog</a>
							<ul class="second-level">
								<li><a href="blog-1.html" class="animsition-link">posts list</a></li>
								<li><a href="single-post.html" class="animsition-link">single post</a></li>
							</ul>
						</li>
						<li><a href="contact.html" class="animsition-link">contact us</a></li>
					</ul>
				</nav>
				<!-- mobile navbar -->
				<nav class="mobile-nav"></nav>
				<div class="menu-icon">
					<div class="line"></div>
					<div class="line"></div>
					<div class="line"></div>
				</div>
			</div>
		</div>
	</header>

	<!-- HERO SECTION-->
	<div class="site-hero">
		<!--
		<ul class="slides">
			<li>
				<div><span class="small-title uppercase montserrat-text">we're</span></div>
				<div class="big-title uppercase montserrat-text">digital agency</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p>
			</li>
			<li>
				<div><span class="small-title uppercase montserrat-text">we do</span></div>
				<div class="big-title uppercase montserrat-text">creative stuff</div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. </p>
			</li>
		</ul>
		-->
	</div>
<?= $content ?>
	<!-- FOOTER -->
	<footer class="main-footer wow fadeInUp">
		<div class="container">
			<div class="col-md-8 col-sm-12">
				<div class="row">
					<nav class="footer-nav">
						<ul>
							<li><a href="index.html" class="animsition-link link">Home</a></li>
							<li><a href="about.html" class="animsition-link link">about us</a></li>
							<li><a href="services.html" class="animsition-link link">services</a></li>
							<li><a href="portfolio-1.html" class="animsition-link link">portfolio</a></li>
							<li><a href="blog-1.html" class="animsition-link link">blog</a></li>
							<li><a href="contact.html" class="animsition-link link">contact us</a></li>
						</ul>
					</nav>
				</div>
			</div>

			<div class="col-md-4 col-sm-12" style="text-align:right">
				<div class="row">
					<div class="uppercase gray-text">
						created &copy;2017.
					</div>
					<ul class="social-icons" style="margin-top:30px;float:right">
						<li><a href="#"><i class="icon ion-social-facebook"></i></a></li>
						<li><a href="#"><i class="icon ion-social-twitter"></i></a></li>
						<li><a href="#"><i class="icon ion-social-youtube"></i></a></li>
						<li><a href="#"><i class="icon ion-social-linkedin"></i></a></li>
						<li><a href="#"><i class="icon ion-social-pinterest"></i></a></li>
						<li><a href="#"><i class="icon ion-social-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>



<?php $this->endBody() ?>
<!-- script -->
<? $this->registerJs($js); ?>
</body>
</html>
<?php $this->endPage() ?>