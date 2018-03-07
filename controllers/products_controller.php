<?php
class ProductsController {
	public function index() {
		$products = array();
		$product_list = ProductRepository::all();
		
		foreach($product_list->fetchAll() AS $product)
        {
            $products[] = new Product($product['ID_Produkt'], $product['Name'], $product['Beschreibung'], $product['Preis'], $product['Kategorie'], $product['Hersteller']);
        }
		require_once('views/products/index.php');
	}
	public function input() {
		$product = ProductRepository::create(($_POST['name']), ($_POST['description']), ($_POST['price']));
		
		if(isset($product)) {
			call("products", "index");
		}
		else {
			echo "Es ist ein Fehler aufgetreten!";
		}
	}
	
	public function add() {
		require_once('views/products/add.html');
	}
	
	public function search() {
		$products = array();
		$product_list = ProductRepository::search($_POST['name']); 

		foreach($product_list->fetchAll() AS $product)
        {
            $products[] = new Product($product['ID_Product'], $product['Name'], $product['Description'], $product['Price']);
        }
	
		require_once('views/products/index.php');
	}
}	
?>