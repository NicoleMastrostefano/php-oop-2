<?php
// Creare una classe generale
class Product {
  public $name;
  public $description;
  public $price;

  public function __construct($name, $description, $price){
    $this->name = $name;
    $this->description = $description;
    $this->price = $price;
  }

  public function getDiscount($percent){
    return $this->price * (1 - ($percent / 100));
  }
}
