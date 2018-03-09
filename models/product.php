<?php
class Product{
	protected $id;
	protected $name;
	protected $description;
	protected $price;
	protected $category;
	protected $manufactor;

	public function __construct($id, $name, $description, $price, $category, $manufactor) {
      $this->setID($id);
      $this->setName($name);
      $this->setDescription($description);
	  $this->setPrice($price);
	  $this->setCategory($category);
	  $this->setManufactor($manufactor);
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
	public function setCategory($category) {
		$this->category = $category;
	}
	public function setManufactor($manufactor) {
		$this->manufactor = $manufactor;
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
	public function getCategory() {
		return $this->category;
	}
	public function getManufactor() {
		return $this->manufactor;
	}
	
}
?>