<?php
include_once __DIR__ . '/Product.php';

// creare altre classi che estendono questa classe generale.
class Shirt extends Product {
  public $brand;
  public $size;
  public $color;

  public function __construct($name, $description, $price, $brand, $size, $color){
    parent::__construct($name, $description, $price);
    $this->brand = $brand;
    $this->size = $size;
    $this->color = $color;
  }
}
