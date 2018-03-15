<?php
class HerstellerRepository {
    public function all() {
        $list = [];
		  $db = Db::getInstance();
          $req = $db->query('SELECT * FROM hersteller');
          return $req;
    }
}
?>
