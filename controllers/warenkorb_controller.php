<?php
class WarenkorbController {
    public function index() {
		$warenkorb = array();
		$product_list = WarenkorbRepository::all();

		foreach($product_list->fetchAll() AS $product)
        {
            $warenkorb[] = new Warenkorb($product['ID_Produkt'], $product['Name'], $product['Preis'], $product['Hersteller'], $product['Anzahl']);
		}
		
		require_once('views/warenkorb/index.php');
	}

	public function kasse() {
		WarenkorbRepository::kasse();
		require_once('views/warenkorb/verabschiedung.php');
	}
}
?>