<?php
	//titre
	$title;
	$idCategory;
	$title2;
	try {
		$dbh = new PDO('mysql:host=localhost;dbname=hijelia', "hijelia", "BJ5mAuegzVtO7BHU");
		$idCategory;
		foreach($dbh->query('Select * From categories  WHERE categories.id_category ='.$_GET["type"]) as $row) {
			$title = $row['libel'];
			$idCategory = $row['id_category'];
		}
		foreach($dbh->query('Select * From types  WHERE types.id_type ='.$idCategory) as $row) {
			$title2 = $row['libel'];
		}
		$dbh = null;
	} catch (PDOException $e) {
		print "Erreur !: " . $e->getMessage() . "<br/>";
		die();
	}
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>HIJELIA &mdash; <?php print($title2." - ".$title); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

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
	
	<div id="fh5co-product">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2><?php print($title2." - ".$title); ?></h2>
				</div>
			</div>
			<div class="row">
			<?php
					try {
						$dbh = new PDO('mysql:host=localhost;dbname=hijelia', "hijelia", "BJ5mAuegzVtO7BHU");
						foreach($dbh->query('Select articles.* From articles INNER JOIN categories ON categories.id_category = articles.id_category WHERE categories.id_category ='.$_GET["type"]) as $row) {
							$article = '<div class="col-md-3 text-center animate-box"><div class="product">';
							$article .= '<div class="product-grid" style="background-image:url('.$row['img_path'].');"><div class="inner"><p>';
							$article .= '<a href="single.php?idArticle='.$row['id_article'].'" class="icon"><i class="icon-shopping-cart"></i></a><a href="single.php?idArticle='.$row['id_article'].'" class="icon"><i class="icon-eye"></i></a></p>';
							$article .= '</div></div><div class="desc"><h3><a href="single.php?idArticle='.$row['id_article'].'">'.$row['libel'].'</a></h3></div></div></div>';
							print_r($article);
						}
						$dbh = null;
					} catch (PDOException $e) {
						print "Erreur !: " . $e->getMessage() . "<br/>";
						die();
					}
			?>
			</div>
		</div>
	</div>
	</div>
	<?php include 'addons/footer.html' ?>
	</body>
</html>

