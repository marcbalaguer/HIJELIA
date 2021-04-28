	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-xs-2">
				</div>
				<div class="col-md-6 col-xs-6 text-center menu-1">
					<div id="fh5co-logo"><a href="./index.php" style="font-size: 50px;">HIJELIA.</a></div>
				</div>
				<div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-xs-6 text-right hidden-xs menu-2">
					<ul>
						<li class="search">
							<div class="input-group">
						      <input type="text" placeholder="Recherche ..." >
						      <span class="input-group-btn">
						        <button class="btn btn-primary" type="button"><i class="icon-search"></i></button>
						      </span>
						    </div>
						</li>
					</ul>
				</div>
				<div class="col-md-6 col-xs-6 text-center menu-1">
					<ul>
					<?php
						$typesList = array ();
						$categoriesList = array ();
						try {
							$dbh = new PDO('mysql:host=localhost;dbname=hijelia', "hijelia", "BJ5mAuegzVtO7BHU");
							foreach($dbh->query('Select * From types') as $row) {
								if($row['id_type'] != null){
									$leMenu = '<li class="has-dropdown">';
									$leMenu .='<a href="./product.php?type='.$row['id_type'].'">'.$row['libel'].'</a>';
									$leMenu .='<ul class="dropdown">';
									foreach($dbh->query('Select * From categories where id_type = '.$row['id_type']) as $row2) {
										$leMenu .= '<li>';
										$leMenu .='<a href="./productSous.php?type='.$row2['id_category'].'">'.$row2['libel'].'</a>';
										$leMenu .='</li>';
									}
									$leMenu .='</ul></li>';
								}
								print($leMenu);
							}
							$dbh = null;
						} catch (PDOException $e) {
							print "Erreur !: " . $e->getMessage() . "<br/>";
							die();
						}
					?>
						<li><a href="./contact.php">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">
					<ul>
						<li class="shopping-cart"><a href="./contactAccount.php" class="cart"><span><i class="icon-user"></i></span></a></li>
						<li class="shopping-cart"><a href="./shopping.php" class="cart"><span><small>0</small><i class="icon-shopping-cart"></i></span></a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>