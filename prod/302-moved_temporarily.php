<?php
define('PAGE','erreur_302');
$metatitle = "Krm-web, The digitale Team | Erreur 302 : Moved temporarily";
$metarobots = "noindex, nofollow"
?>

<?php include 'includes/header.php'; ?>
<?php include_once("includes/analyticstracking.php") ?>

<div id="error">
		<video autoplay loop poster="img/mock-up.jpg" id="bgvid">
	  		<source src="img/mock-up.webm" type="video/webm">
	  		<source src="img/mock-up.mp4" type="video/mp4">
		</video>
		
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a href="#" class="logo"><img class="center-block" src="img/logo-krm.svg" alt="logo"></a>
				</div>
			</div>
			<div class="row content">
				<div class="col-md-12">
					<h1 class="text-center">OOOOPS !</h1>
					<p class="text-center">This page has been moved temporarily ...<br><a href="http://krm-web.com">Go back to home page</a></p>					
				</div>
			</div>
		</div>
	</div>

	<?php include 'includes/footer.php'; ?>