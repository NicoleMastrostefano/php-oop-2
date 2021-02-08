<?php
include_once __DIR__ . '/Product.php';

// creare altre classi che estendono questa classe generale.
class Jacket extends Product {
  public $type;
  public $material;

  public function __construct($name, $description, $price, $type, $material) {
      parent::__construct($name, $description, $price);
      $this->type = $type;
      $this->material = $material;
  }
}
