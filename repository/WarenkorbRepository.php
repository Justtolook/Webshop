<?php
class WarenkorbRepository {
    public static function all() {
		$db = Db::getInstance();
		if(!(isset($_SESSION))) session_start();
		$user_id = $_SESSION['var'];
		$req = $db->prepare('SELECT ID_Produkt, Name, Hersteller, Preis, Anzahl FROM v_warenkorb WHERE ID_Kunde = :user_id');
		$req->bindValue(':user_id', $user_id, PDO::PARAM_INT);
		$req->execute();
		return $req;
	}

	public static function kasse() {
		$db = Db::getInstance();
		if(!(isset($_SESSION))) session_start();
		$user_id = $_SESSION['var'];
		$time = date("H:i:s");
		$date = date("Y-m-d");
		$req = $db->prepare('INSERT INTO rechnung (Datum, Uhrzeit, ID_Kunde) VALUES(:date, :time, :user_id) ');
		$req->bindValue(':user_id', $user_id, PDO::PARAM_INT);
		$req->bindParam(':date', $date, PDO::PARAM_STR);
		$req->bindParam(':time', $time, PDO::PARAM_STR);
		$req->execute();

		$req = $db->prepare('SELECT ID_Rechnung FROM rechnung WHERE Datum = :date AND Uhrzeit = :time AND ID_Kunde = :user_id');
		$req->bindValue(':user_id', $user_id, PDO::PARAM_INT);
		$req->bindParam(':date', $date, PDO::PARAM_STR);
		$req->bindParam(':time', $time, PDO::PARAM_STR);
		$req->execute();
		$rechnung_id = $req->fetchAll();
		$rechnung_id = $rechnung_id[0][0];

		$product_list = WarenkorbRepository::all();

		foreach($product_list->fetchAll() AS $product)
        {
			$req = $db->prepare('INSERT INTO betrifft (ID_Produkt, ID_Rechnung, Anzahl) VALUES (:product_id, :rechnung_id, :anzahl)');
			$req->bindValue(':rechnung_id', $rechnung_id, PDO::PARAM_INT);
			$req->bindValue(':product_id', $product[0], PDO::PARAM_INT);
			$req->bindValue(':anzahl', $product[4], PDO::PARAM_INT);
			$req->execute();
		}

		$req = $db->prepare('DELETE FROM auswaehlen WHERE ID_Kunde = :user_id');
		$req->bindValue(':user_id', $user_id, PDO::PARAM_INT);
		$req->execute();
	}
}
?>