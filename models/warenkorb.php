<?php
class Warenkorb{
	protected $id;
	protected $name;
	protected $price;
	protected $manufactor;
	protected $quantity;

	public function __construct($id, $name, $price, $manufactor, $quantity) {
      $this->setID($id);
      $this->setName($name);
	  $this->setPrice($price);
	  $this->setManufactor($manufactor);
	  $this->setQuantity($quantity);
    }
	
	public function setID($id) {
		$this->id = $id;
	}
	public function setname($name) {
		$this->name = $name;
	}
	public function setPrice($price) {
		$this->price = $price;
	}
	public function setManufactor($manufactor) {
		$this->manufactor = $manufactor;
	}
	public function setQuantity($quantity) {
		$this->quantity = $quantity;
	}
   
	public function getID() {
		return $this->id;
	}
	public function getName() {
		return $this->name;
	}
	public function getPrice() {
		return $this->price;
	}
	public function getManufactor() {
		return $this->manufactor;
	}
	public function getQuantity() {
		return $this->quantity;
	}
	
}
?>