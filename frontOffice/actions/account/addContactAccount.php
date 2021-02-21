<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=hijelia', "hijelia", "BJ5mAuegzVtO7BHU");
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
// On ajoute une entrée dans la table jeux_video
$req = $bdd->prepare('INSERT INTO contacts (prenom, nom, mail, motDePasse, mobile, adresse1, adresse2, codePostal, ville, pays) VALUES(:prenom, :nom, :mail, :motDePasse, :mobile, :adresse1, :adresse2, :codePostal, :ville, :pays)');
$req->execute(array(
	'prenom' => $_POST['lname'],
	'nom' => $_POST['fname'],
	'mail' => $_POST['email'],
	'motDePasse' => $_POST['pass'],
	'mobile' => $_POST['telephone'],
	'adresse1' => $_POST['adresse1'],
    'adresse2' => $_POST['adresse2'],
	'codePostal' => $_POST['codePostal'],
	'ville' => $_POST['ville'],
	'pays' => $_POST['pays']

	));
?>