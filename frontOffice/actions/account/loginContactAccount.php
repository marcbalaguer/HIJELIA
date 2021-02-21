<?php

try {
    $dbh = new PDO('mysql:host=localhost;dbname=hijelia', "hijelia", "BJ5mAuegzVtO7BHU");
    foreach($dbh->query('SELECT * from contacts WHERE mail = "'.$_POST['email'].'"  AND motDePasse = "'.$_POST['pass'].'"') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>