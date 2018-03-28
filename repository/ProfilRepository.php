<?php
class ProfilRepository {
    public function profilInfo() {
        $db = Db::getInstance();

        if(!(isset($_SESSION))) session_start();
        $user_id = $_SESSION["var"];
        $req = $db->prepare('SELECT * FROM kunde WHERE ID_Kunde = :user_id');
        $req->bindParam(':user_id', $user_id, PDO::PARAM_STR);
        $req->execute();
        return $req;
    }
}
?>