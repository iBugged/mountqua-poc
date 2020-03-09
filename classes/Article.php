<?php

class Article
{
  private $id;
  private $name;
  private $description;
  private $price;
  private $stock = 0;

  public function __construct($id, $name, $description, $price, $stock = 0){
    // Set the attributes
    $this->id = $id;
    $this->name = $name;
    $this->description = $description;
    $this->price = $price;
    $this->stock = $stock;
  }

  public function getId(){
    return $this->id;
  }

  public function setId($id){
    if(!empty($id) && $id != ""){
      $this->id = $id;
    }else{
      throw new Exception("The Article ID is not allowed to be empty.");
    }
  }

  public function getName(){
    return $this->name;
  }

  public function setName($name){
    if(!empty($name) && $name != ""){
      $this->name = $name;
    }else{
      throw new Exception("The Article name is not allowed to be empty.");
    }
  }

  public function getDescription(){
    return $this->description;
  }

  public function setDescription($description){
    if(!empty($description) && $description != ""){
      $this->description = $description;
    }else{
      throw new Exception("The Article description is not allowed to be empty.");
    }
  }

  public function getPrice(){
    return $this->price;
  }

  public function setPrice($price){
    if(!empty($price) && is_numeric($price) && $price >= 0){
      $this->price = $price;
    }else{
      throw new Exception("The Article price needs to be a valid positive number and not empty.");
    }
  }

  public function getStock(){
    return $this->stock;
  }

  public function setStock($stock){
    if(!empty($stock) && is_numeric($stock) && $stock >= 0){
      $this->stock = $stock;
    }else{
      throw new Exception("The Article stock needs to be a valid positive integer and not empty.");
    }
  }
}