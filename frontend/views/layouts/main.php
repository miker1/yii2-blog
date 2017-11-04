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
	<meta name="author" content="">
	<meta name="description" content="">

	<?php $this->head() ?>
</head>
<body class="animsition">
<?php $this->beginBody() ?>
	<!-- HEADER  -->
	<header class="main-header">
		<div class="container">


			<div class="menu">
				<!-- desktop navbar -->
				<nav class="desktop-nav">
					<ul class="first-level">
                        <?php if (Yii::$app->user->isGuest): ?>
                            <li><a href="<?= Html::encode(Url::to(['/auth/auth/login'])) ?>" class="animsition-link">Login</a></li>
                            <li><a href="<?= Html::encode(Url::to(['/auth/signup/request'])) ?>" class="animsition-link">Signup</a></li>

                        <?php else: ?>
						<li><a href="">cabinet</a>
							<ul class="second-level">
							<?php if (\Yii::$app->user->can('author')):?>
								<li><a href="<?= Html::encode(Url::to(['/cabinet/default/index'])) ?>" class="animsition-link">Cabinet</a></li>
							<?php endif; ?>
								<li><a href="<?= Html::encode(Url::to(['/auth/auth/logout'])) ?>" class="animsition-link">Logout</a></li>
							</ul>
						</li>
                        <?php endif; ?>
						<li><a href="<?= Html::encode(Url::to(['/site/index'])) ?>" class="animsition-link">Home</a></li>
						<li><a href="<?= Html::encode(Url::to(['/site/about'])) ?>" class="animsition-link">about us</a></li>
						<li><a href="<?= Html::encode(Url::to(['/blog/post/index'])) ?>" class="animsition-link">blog</a></li>
						<li><a href="<?= Html::encode(Url::to(['/contact/index'])) ?>" class="animsition-link">contact us</a></li>
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
	</div>
<?= $content ?>
	<!-- FOOTER -->
	<footer class="main-footer wow fadeInUp">
		<div class="container">
			<div class="col-md-8 col-sm-12">
				<div class="row">
					<nav class="footer-nav">
						<ul>
							<li><a href="<?= Html::encode(Url::to(['/site/index'])) ?>" class="animsition-link link">Home</a></li>
							<li><a href="<?= Html::encode(Url::to(['/site/about'])) ?>" class="animsition-link link">about us</a></li>
							<li><a href="<?= Html::encode(Url::to(['/blog/post/index'])) ?>" class="animsition-link link">blog</a></li>
							<li><a href="<?= Html::encode(Url::to(['/contact/index'])) ?>" class="animsition-link link">contact us</a></li>

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