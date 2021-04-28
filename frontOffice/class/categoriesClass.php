<?php
class Categories {
  // Properties
  public $id_category ;
  public $libel;
  public $date_create;
  public $date_update;


  // Methods
  function set_id_category($id_category) {
    $this->id_category = $id_category;
  }
  function get_id_category() {
    return $this->id_category;
  }

  function set_libel($libel) {
    $this->libel = $libel;
  }
  function get_libel() {
    return $this->libel;
  }

  function set_date_create($date_create) {
    $this->date_create = $date_create;
  }
  function get_date_create() {
    return $this->date_create;
  }

  function set_date_update($date_update) {
    $this->date_update = $date_update;
  }
  function get_date_update() {
    return $this->date_update;
  }

}
?>