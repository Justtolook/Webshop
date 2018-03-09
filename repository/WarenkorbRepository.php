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
}
?>