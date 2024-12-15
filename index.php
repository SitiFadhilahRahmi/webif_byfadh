<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Departemen Informatika Universitas Andalas</title>
	<script src="js\text.js"></script>
	<link rel="stylesheet" href="css\style2.css">
	<link rel="icon" href="pages\images\image.png" sizes="192x192" />
	<script type="text/javascript" src="js\jquery-core.js" id="jquery-core-js"></script>
</head>
<body>
	<div class="site">
		<div class="header">
			<!-- header -->
			<?php include 'pages\header1.php'; ?>
		</div>
		<main id="main" class="site-content" role="main">
			<div class="page-content">
				<!-- content -->
				<?php include 'pages\content\imageslider.php'; ?>
				<?php include 'pages\content\imagetext.php'; ?>
				<?php include 'pages\content\contentslider.php'; ?>
				<?php include 'pages\content\researcharea.php'; ?>
				<?php include 'pages\content\researchthemes.php'; ?>
		<?php include 'pages\content\contentcolums.php'; ?>
			</div>
		</main>
		<?php include 'pages\footer.php'; ?>
	</div>
	<script type="text/javascript" src="js\philament.js" id="philament-scripts-js"></script>
	<script type="text/javascript" src="js\megamenu.js" id="megamenu-js"></script>
	<?php include 'symbol.php'; ?>
</body>
</html>