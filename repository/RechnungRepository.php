<?php
class RechnungRepository {
    public function all() {
        $db = Db::getInstance();
        if(!(isset($_SESSION))) session_start();
		$user_id = $_SESSION['var'];
        $req = $db->prepare('SELECT * FROM v_rechnung_info WHERE ID_Kunde = :user_id');
        $req->bindValue(':user_id', $user_id, PDO::PARAM_INT);
        $req->execute();
        return $req;
    }

    public function details($rechnung_id) {
        $db = Db::getInstance();
        if(!(isset($_SESSION))) session_start();
		$user_id = $_SESSION['var'];
        $req = $db->prepare('SELECT * FROM v_rechnung_details WHERE ID_Rechnung = :rechnung_id');
        $req->bindValue(':rechnung_id', $rechnung_id, PDO::PARAM_INT);
        $req->execute();
        return $req;
    }
}
?>