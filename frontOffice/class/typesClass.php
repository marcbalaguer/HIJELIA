<?php
class Types {
  // Properties
  public $id_type ;
  public $libel;
  public $date_create;
  public $date_update;


  // Methods
  function set_id_type($id_type) {
    $this->id_type = $id_type;
  }
  function get_id_type() {
    return $this->id_type;
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