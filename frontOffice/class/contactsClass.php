<?php
class Contacts {
  // Properties
  public $id_contact ;
  public $prenom;
  public $nom;
  public $mail;
  public $motDePasse;
  public $mobile;
  public $adresse1;
  public $adresse2;
  public $codePostal;
  public $ville;
  public $pays;

  // Methods
  function set_id_contact($id_contact) {
    $this->id_contact = $id_contact;
  }
  function get_id_contact() {
    return $this->id_contact;
  }

  function set_prenom($prenom) {
    $this->prenom = $prenom;
  }
  function get_prenom() {
    return $this->prenom;
  }

  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }

  function set_mail($mail) {
    $this->mail = $mail;
  }
  function get_mail() {
    return $this->mail;
  }

  function set_motDePasse($motDePasse) {
    $this->motDePasse = $motDePasse;
  }
  function get_motDePasse() {
    return $this->motDePasse;
  }
  
  function set_mobile($mobile) {
    $this->mobile = $mobile;
  }
  function get_mobile() {
    return $this->mobile;
  }

  function set_adresse1($adresse1) {
    $this->adresse1 = $adresse1;
  }
  function get_adresse1() {
    return $this->adresse1;
  }

  function set_adresse2($adresse2) {
    $this->adresse2 = $adresse2;
  }
  function get_adresse2() {
    return $this->adresse2;
  }

  function set_ville($ville) {
    $this->ville = $ville;
  }
  function get_ville() {
    return $this->ville;
  }

  function set_codePostal($codePostal) {
    $this->codePostal = $codePostal;
  }
  function get_codePostal() {
    return $this->codePostal;
  }

  function set_pays($pays) {
    $this->pays = $pays;
  }
  function get_pays() {
    return $this->pays;
  }
}
?>