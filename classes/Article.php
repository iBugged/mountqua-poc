<?php

class Article
{
  private $id;
  private $name;
  private $description;
  private $price;
  private $stock;

  public function __construct($id, $name, $description, $price, $stock){
    // Check and set attributes
    $this->setId($id);
    $this->setName($name);
    $this->setDescription($description);
    $this->setPrice($price);
    $this->setStock($stock);
  }

  public function getId(){
    return $this->id;
  }

  public function setId($id){
    if(isset($id) && $id != ""){
      $this->id = $id;
    }else{
      throw new Exception("The Article ID is not allowed to be empty.");
    }
  }

  public function getName(){
    return $this->name;
  }

  public function setName($name){
    if(isset($name) && $name != ""){
      $this->name = $name;
    }else{
      throw new Exception("The Article name is not allowed to be empty.");
    }
  }

  public function getDescription(){
    return $this->description;
  }

  public function setDescription($description){
    if(isset($description) && $description != ""){
      $this->description = $description;
    }else{
      throw new Exception("The Article description is not allowed to be empty.");
    }
  }

  public function getPrice(){
    return $this->price;
  }

  public function setPrice($price){
    if(isset($price) && is_numeric($price) && $price >= 0){
      $this->price = $price;
    }else{
      throw new Exception("The Article price needs to be a valid positive number and not empty.");
    }
  }

  public function getStock(){
    return $this->stock;
  }

  public function setStock($stock){
    if(isset($stock) && is_numeric($stock) && $stock >= 0){
      $this->stock = $stock;
    }else{
      throw new Exception("The Article stock needs to be a valid positive integer and not empty.");
    }
  }
}