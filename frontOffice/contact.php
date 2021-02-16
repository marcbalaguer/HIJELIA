<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>HIJELIA &mdash; Contact</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />
  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<?php include 'addons/head.html' ?>

</head>
<body>
<?php include 'addons/navbar.php' ?>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Nous contacter</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="fh5co-contact-info">
						<h3>A propos de nous</h3>
						<ul>
							<li class="address">Adresse 1 <br> Adresse 2</li>
							<li class="phone"><a href="tel://0101010101">*numero de téléphone*</a></li>
							<li class="email"><a href="mailto:info@yoursite.com">adresseMail@gmail.com</a></li>
						</ul>
					</div>

				</div>
				<div class="col-md-6 animate-box">
					<h3>Vos informations</h3>
					<form action="actions/mail/mailContactAction.php" method="post" >
						<div class="row form-group">
							<div class="col-md-6">
								<input type="text" name="fname" id="fname" class="form-control" placeholder="Votre nom">
							</div>
							<div class="col-md-6">
								<input type="text" name="lname" id="lname" class="form-control" placeholder="Votre prénom">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<input type="text" name="email" id="email" class="form-control" placeholder="Votre adresse Email">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<input type="text" name="subject" id="subject" class="form-control" placeholder="Titre de votre demande">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Laissez nous votre message"></textarea>
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Envoyer" class="btn btn-primary">
						</div>

					</form>		
				</div>
			</div>
			
		</div>
	</div>

	<div id="map" class="animate-box" data-animate-effect="fadeIn"></div>

	<div id="fh5co-started">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Newsletter</h2>
					<p>Just stay tune for our latest Product. Now you can subscribe</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<form class="form-inline">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="email" class="form-control" id="email" placeholder="Email">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<button type="submit" class="btn btn-default btn-block">Subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	
	</div>
	<?php include 'addons/footer.html' ?>


	</body>
</html>

