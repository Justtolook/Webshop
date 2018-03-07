<?php
class Product{
	protected $id;
	protected $name;
	protected $description;
	protected $price;
	
	public function __construct($id, $name, $description, $price) {
      $this->setID($id);
      $this->setName($name);
      $this->setDescription($description);
	  $this->setPrice($price);
    }
	
	public function setID($id) {
		$this->id = $id;
	}
	public function setname($name) {
		$this->name = $name;
	}
	public function setDescription($description) {
		$this->description = $description;
	}
	public function setPrice($price) {
		$this->price = $price;
	}
   
	public function getID() {
		return $this->id;
	}
	public function getName() {
		return $this->name;
	}
	public function getDescription() {
		return $this->description;
	}
	public function getPrice() {
		return $this->price;
	}
	
}
?>