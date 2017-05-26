<!DOCTYPE html>
<html lang="en">
<head>

	<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
	<meta charset="utf-8">
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

  <!--Core CSS & JS -->
    <?php Yii::app()->clientScript->registerPackage('avocado-js'); ?>
    <?php Yii::app()->clientScript->registerPackage('avocado-css'); ?>

  	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,600,300' rel='stylesheet' type='text/css'>
	<style type="text/css">
		body { padding-top: 102px; }
	</style>

	<!-- JavaScript/jQuery, Pre-DOM -->
	<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

	<!-- HTML5, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

</head>

<body>

	<?php $this->renderPartial('//layouts/backend/_header'); ?>

	<!-- Content Container -->
	<div class="container">

		<!-- Main Navigation: Box -->
		<?php $this->renderPartial('//layouts/backend/_menu'); ?>
		<!-- / Main Navigation: Box -->

		<?php echo $content; ?>

	</div>
	<!-- / Content Container -->

	<!-- Footer -->
	<footer class="footer">

			<!-- Footer Container -->
      <div class="container">

				<!-- Footer Container: Content -->
        <!-- <p>Development and design by <a href="http://github.com/ardipseptiadi">Ardi</a></p> -->
        <p>Copyright <a href="http://scmamidis.dev">Amidis</a> 2017. All rights resserved.</p>
        <!-- <ul>
          <li><a href="http://themeforest.net/user/LycheeDesigns">Buy Theme</a></li>
          <li class="muted">·</li>
          <li><a href="http://themeforest.net/user/LycheeDesigns">Lychee</a></li>
          <li class="muted">·</li>
          <li><a href="https://twitter.com/lycheedesigns">Twitter</a></li>
        </ul> -->
        <!-- / Footer Container: Content -->

      </div>
      <!-- / Footer Container -->

	</footer>
	<!-- / Footer -->

</body>

	<!-- Javascript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->

    <?php Yii::app()->clientScript->registerPackage('avocado-bottom-js'); ?>

</html>
