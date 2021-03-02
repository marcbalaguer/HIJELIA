<?php
  // Initialiser la session
  session_start();
?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>HIJELIA &mdash; Connexion</title>
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
    <?php
    if(!isset($_SESSION["username"])){
?>
	<div id="page">
        <br/>
	    <div id="fh5co-contacts">
		<div class="container">
			<div class="row">
				<div class="col-md-6 animate-box">
					<h3>Connectez vous</h3>
					<form action="actions/account/loginContactAccount.php" method="post" >
						<div class="row form-group">
							<div class="col-md-12">
								<input type="text" name="email" id="email" class="form-control" placeholder="Votre adresse Email">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
                            <input type="password" name="pass" id="pass" class="form-control" placeholder="Votre mot de passe">
							</div>
						</div>
						<div class="form-group">
							<input type="submit" value="Connexion" class="btn btn-primary">
						</div>

					</form>		
				</div>
                <div class="col-md-6 animate-box">
					<h3>Inscrivez vous</h3>
					<form action="actions/account/addContactAccount.php" method="post" >
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
                            <input type="password" name="pass" id="pass" class="form-control" placeholder="Votre mot de passe">
							</div>
						</div>
                        <div class="row form-group">
							<div class="col-md-12">
                            <input type="text" name="telephone" id="telephone" class="form-control" placeholder="Votre numero de telephone">
							</div>
						</div>
                        <div class="row form-group">
							<div class="col-md-12">
								<textarea name="adresse1" id="adresse1" cols="30" rows="1" class="form-control" placeholder="Votre adresse"></textarea>
							</div>
						</div>
                        <div class="row form-group">
							<div class="col-md-12">
								<textarea name="adresse2" id="adresse2" cols="30" rows="1" class="form-control" placeholder="Complement d'adresse"></textarea>
							</div>
						</div>
                        <div class="row form-group">
							<div class="col-md-12">
                            <input type="text" name="ville" id="ville" class="form-control" placeholder="Votre ville">
							</div>
						</div>
                        <div class="row form-group">
							<div class="col-md-12">
                            <input type="text" name="codePostal" id="codePostal" class="form-control" placeholder="Votre code postal">
							</div>
						</div>
                        <div class="row form-group">
							<div class="col-md-12">
                                <select name="pays">
                                <optgroup label="Afrique">
                                <option value="afriqueDuSud">Afrique Du Sud</option>
                                <option value="algerie">Algérie</option>
                                <option value="angola">Angola</option>
                                <option value="benin">Bénin</option>
                                <option value="botswana">Botswana</option>
                                <option value="burkina">Burkina</option>
                                <option value="burundi">Burundi</option>
                                <option value="cameroun">Cameroun</option>
                                <option value="capVert">Cap-Vert</option>
                                <option value="republiqueCentre-Africaine">République Centre-Africaine</option>
                                <option value="comores">Comores</option>
                                <option value="republiqueDemocratiqueDuCongo">République Démocratique Du Congo</option>
                                <option value="congo">Congo</option>
                                <option value="coteIvoire">Côte d'Ivoire</option>
                                <option value="djibouti">Djibouti</option>
                                <option value="egypte">Égypte</option>
                                <option value="ethiopie">Éthiopie</option>
                                <option value="erythrée">Érythrée</option>
                                <option value="gabon">Gabon</option>
                                <option value="gambie">Gambie</option>
                                <option value="ghana">Ghana</option>
                                <option value="guinee">Guinée</option>
                                <option value="guinee-Bisseau">Guinée-Bisseau</option>
                                <option value="guineeEquatoriale">Guinée Équatoriale</option>
                                <option value="kenya">Kenya</option>
                                <option value="lesotho">Lesotho</option>
                                <option value="liberia">Liberia</option>
                                <option value="libye">Libye</option>
                                <option value="madagascar">Madagascar</option>
                                <option value="malawi">Malawi</option>
                                <option value="mali">Mali</option>
                                <option value="maroc">Maroc</option>
                                <option value="maurice">Maurice</option>
                                <option value="mauritanie">Mauritanie</option>
                                <option value="mozambique">Mozambique</option>
                                <option value="namibie">Namibie</option>
                                <option value="niger">Niger</option>
                                <option value="nigeria">Nigeria</option>
                                <option value="ouganda">Ouganda</option>
                                <option value="rwanda">Rwanda</option>
                                <option value="saoTomeEtPrincipe">Sao Tomé-et-Principe</option>
                                <option value="senegal">Séngal</option>
                                <option value="seychelles">Seychelles</option>
                                <option value="sierra">Sierra</option>
                                <option value="somalie">Somalie</option>
                                <option value="soudan">Soudan</option>
                                <option value="swaziland">Swaziland</option>
                                <option value="tanzanie">Tanzanie</option>
                                <option value="tchad">Tchad</option>
                                <option value="togo">Togo</option>
                                <option value="tunisie">Tunisie</option>
                                <option value="zambie">Zambie</option>
                                <option value="zimbabwe">Zimbabwe</option>
                                </optgroup>
                                <optgroup label="Amérique">
                                <option value="antiguaEtBarbuda">Antigua-et-Barbuda</option>
                                <option value="argentine">Argentine</option>
                                <option value="bahamas">Bahamas</option>
                                <option value="barbade">Barbade</option>
                                <option value="belize">Belize</option>
                                <option value="bolivie">Bolivie</option>
                                <option value="bresil">Brésil</option>
                                <option value="canada">Canada</option>
                                <option value="chili">Chili</option>
                                <option value="colombie">Colombie</option>
                                <option value="costaRica">Costa Rica</option>
                                <option value="cuba">Cuba</option>
                                <option value="republiqueDominicaine">République Dominicaine</option>
                                <option value="dominique">Dominique</option>
                                <option value="equateur">Équateur</option>
                                <option value="etatsUnis">États Unis</option>
                                <option value="grenade">Grenade</option>
                                <option value="guatemala">Guatemala</option>
                                <option value="guyana">Guyana</option>
                                <option value="haiti">Haïti</option>
                                <option value="honduras">Honduras</option>
                                <option value="jamaique">Jamaïque</option>
                                <option value="mexique">Mexique</option>
                                <option value="nicaragua">Nicaragua</option>
                                <option value="panama">Panama</option>
                                <option value="paraguay">Paraguay</option>
                                <option value="perou">Pérou</option>
                                <option value="saintCristopheEtNieves">Saint-Cristophe-et-Niévès</option>
                                <option value="sainteLucie">Sainte-Lucie</option>
                                <option value="saintVincentEtLesGrenadines">Saint-Vincent-et-les-Grenadines</option>
                                <option value="salvador">Salvador</option>
                                <option value="suriname">Suriname</option>
                                <option value="triniteEtTobago">Trinité-et-Tobago</option>
                                <option value="uruguay">Uruguay</option>
                                <option value="venezuela">Venezuela</option>
                                </optgroup>
                                <optgroup label="Asie">
                                <option value="afghanistan">Afghanistan</option>
                                <option value="arabieSaoudite">Arabie Saoudite</option>
                                <option value="armenie">Arménie</option>
                                <option value="azerbaidjan">Azerbaïdjan</option>
                                <option value="bahrein">Bahreïn</option>
                                <option value="bangladesh">Bangladesh</option>
                                <option value="bhoutan">Bhoutan</option>
                                <option value="birmanie">Birmanie</option>
                                <option value="brunei">Brunéi</option>
                                <option value="cambodge">Cambodge</option>
                                <option value="chine">Chine</option>
                                <option value="coreeDuSud">Corée Du Sud</option>
                                <option value="coreeDuNord">Corée Du Nord</option>
                                <option value="emiratsArabeUnis">Émirats Arabe Unis</option>
                                <option value="georgie">Géorgie</option>
                                <option value="inde">Inde</option>
                                <option value="indonesie">Indonésie</option>
                                <option value="iraq">Iraq</option>
                                <option value="iran">Iran</option>
                                <option value="israel">Israël</option>
                                <option value="japon">Japon</option>
                                <option value="jordanie">Jordanie</option>
                                <option value="kazakhstan">Kazakhstan</option>
                                <option value="kirghistan">Kirghistan</option>
                                <option value="koweit">Koweït</option>
                                <option value="laos">Laos</option>
                                <option value="liban">Liban</option>
                                <option value="malaisie">Malaisie</option>
                                <option value="maldives">Maldives</option>
                                <option value="mongolie">Mongolie</option>
                                <option value="nepal">Népal</option>
                                <option value="oman">Oman</option>
                                <option value="ouzbekistan">Ouzbékistan</option>
                                <option value="pakistan">Pakistan</option>
                                <option value="philippines">Philippines</option>
                                <option value="qatar">Qatar</option>
                                <option value="singapour">Singapour</option>
                                <option value="sriLanka">Sri Lanka</option>
                                <option value="syrie">Syrie</option>
                                <option value="tadjikistan">Tadjikistan</option>
                                <option value="taiwan">Taïwan</option>
                                <option value="thailande">Thaïlande</option>
                                <option value="timorOriental">Timor oriental</option>
                                <option value="turkmenistan">Turkménistan</option>
                                <option value="turquie">Turquie</option>
                                <option value="vietNam">Viêt Nam</option>
                                <option value="yemen">Yemen</option>
                                </optgroup>
                                <optgroup label="Europe">
                                <option value="allemagne">Allemagne</option>
                                <option value="albanie">Albanie</option>
                                <option value="andorre">Andorre</option>
                                <option value="autriche">Autriche</option>
                                <option value="bielorussie">Biélorussie</option>
                                <option value="belgique">Belgique</option>
                                <option value="bosnieHerzegovine">Bosnie-Herzégovine</option>
                                <option value="bulgarie">Bulgarie</option>
                                <option value="croatie">Croatie</option>
                                <option value="danemark">Danemark</option>
                                <option value="espagne">Espagne</option>
                                <option value="estonie">Estonie</option>
                                <option value="finlande">Finlande</option>
                                <option value="france">France</option>
                                <option value="grece">Grèce</option>
                                <option value="hongrie">Hongrie</option>
                                <option value="irlande">Irlande</option>
                                <option value="islande">Islande</option>
                                <option value="italie">Italie</option>
                                <option value="lettonie">Lettonie</option>
                                <option value="liechtenstein">Liechtenstein</option>
                                <option value="lituanie">Lituanie</option>
                                <option value="luxembourg">Luxembourg</option>
                                <option value="exRepubliqueYougoslaveDeMacedoine">Ex-République Yougoslave de Macédoine</option>
                                <option value="malte">Malte</option>
                                <option value="moldavie">Moldavie</option>
                                <option value="monaco">Monaco</option>
                                <option value="norvege">Norvège</option>
                                <option value="paysBas">Pays-Bas</option>
                                <option value="pologne">Pologne</option>
                                <option value="portugal">Portugal</option>
                                <option value="roumanie">Roumanie</option>
                                <option value="royaumeUni">Royaume-Uni</option>
                                <option value="russie">Russie</option>
                                <option value="saintMarin">Saint-Marin</option>
                                <option value="serbieEtMontenegro">Serbie-et-Monténégro</option>
                                <option value="slovaquie">Slovaquie</option>
                                <option value="slovenie">Slovénie</option>
                                <option value="suede">Suède</option>
                                <option value="suisse">Suisse</option>
                                <option value="republiqueTcheque">République Tchèque</option>
                                <option value="ukraine">Ukraine</option>
                                <option value="vatican">Vatican</option>
                                </optgroup>
                                <optgroup label="Océanie">
                                <option value="australie">Australie</option>
                                <option value="fidji">Fidji</option>
                                <option value="kiribati">Kiribati</option>
                                <option value="marshall">Marshall</option>
                                <option value="micronesie">Micronésie</option>
                                <option value="nauru">Nauru</option>
                                <option value="nouvelleZelande">Nouvelle-Zélande</option>
                                <option value="palaos">Palaos</option>
                                <option value="papouasieNouvelleGuinee">Papouasie-Nouvelle-Guinée</option>
                                <option value="salomon">Salomon</option>
                                <option value="samoa">Samoa</option>
                                <option value="tonga">Tonga</option>
                                <option value="tuvalu">Tuvalu</option>
                                <option value="vanuatu">Vanuatu</option>
                                </optgroup>
                                </select>
							</div>
						</div>

                      
						<div class="form-group">
							<input type="submit" value="Inscription" class="btn btn-primary">
						</div>

					</form>		
				</div>
			</div>
			
		</div>
	</div>
    <?php

    }else{

        try {
            $dbh = new PDO('mysql:host=localhost;dbname=hijelia', "hijelia", "BJ5mAuegzVtO7BHU");
            foreach($dbh->query('SELECT * from contacts WHERE mail = "'.$_SESSION['username'].'"  AND motDePasse = "'.$_SESSION['password'].'"') as $row) {
                var_dump($row);
            }
            $dbh = null;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }
        ?>
<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="fh5co-tabs animate-box">
						<ul class="fh5co-tab-nav" style="width:auto">
							<li class="active" style="width:auto">
                                <a href="#" data-tab="1">
                                    <span class="icon visible-xs"><i class="icon-file"></i></span>
                                    <span class="hidden-xs">Profil</span>
                                </a>
                            </li>
							<li>
                                <a href="#" data-tab="2" style="width:auto">
                                    <span class="icon visible-xs"><i class="icon-bar-graph"></i></span>
                                    <span class="hidden-xs">Commandes</span>
                                </a>
                            </li>
						</ul>
                        <div style="text-align: right;">
                            <a class="btn btn-danger" href="actions/account/disconnect.php">Deconnexion</a>
                        </div>

						<!-- Tabs -->
						<div class="fh5co-tab-content-wrap">

							<div class="fh5co-tab-content tab-content active" data-tab-content="1">
								<div class="col-md-10 col-md-offset-1">
									<span class="price">100 €</span>
									<h2>Hauteville Rocking Chair</h2>
									<p>Paragraph placeat quis fugiat provident veritatis quia iure a debitis adipisci dignissimos consectetur magni quas eius nobis reprehenderit soluta eligendi quo reiciendis fugit? Veritatis tenetur odio delectus quibusdam officiis est.</p>

									<p>Ullam dolorum iure dolore dicta fuga ipsa velit veritatis molestias totam fugiat soluta accusantium omnis quod similique placeat at. Dolorum ducimus libero fuga molestiae asperiores obcaecati corporis sint illo facilis.</p>

									<div class="row">
										<div class="col-md-6">
											<h2 class="uppercase">Keep it simple</h2>
											<p>Ullam dolorum iure dolore dicta fuga ipsa velit veritatis</p>
										</div>
										<div class="col-md-6">
											<h2 class="uppercase">Less is more</h2>
											<p>Ullam dolorum iure dolore dicta fuga ipsa velit veritatis</p>
										</div>
									</div>

								</div>
							</div>

							<div class="fh5co-tab-content tab-content" data-tab-content="2">
								<div class="col-md-10 col-md-offset-1">
									<h3>Product Specification</h3>
									<ul>
										<li>Paragraph placeat quis fugiat provident veritatis quia iure a debitis adipisci dignissimos consectetur magni quas eius</li>
										<li>adipisci dignissimos consectetur magni quas eius nobis reprehenderit soluta eligendi</li>
										<li>Veritatis tenetur odio delectus quibusdam officiis est.</li>
										<li>Magni quas eius nobis reprehenderit soluta eligendi quo reiciendis fugit? Veritatis tenetur odio delectus quibusdam officiis est.</li>
									</ul>
									<ul>
										<li>Paragraph placeat quis fugiat provident veritatis quia iure a debitis adipisci dignissimos consectetur magni quas eius</li>
										<li>adipisci dignissimos consectetur magni quas eius nobis reprehenderit soluta eligendi</li>
										<li>Veritatis tenetur odio delectus quibusdam officiis est.</li>
										<li>Magni quas eius nobis reprehenderit soluta eligendi quo reiciendis fugit? Veritatis tenetur odio delectus quibusdam officiis est.</li>
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
        <?php
    }
    ?>
	<div id="map" class="animate-box" data-animate-effect="fadeIn"></div>
	</div>
	<?php include 'addons/footer.html' ?>


	</body>
</html>

