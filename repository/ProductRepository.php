<?php
class ProductRepository {
	public static function all() {
		  $list = [];
		  $db = Db::getInstance();
		  $req = $db->query('SELECT * FROM v_produkt_info');
		  // we create a list of Post objects from the database results
		  /*foreach($req->fetchAll() as $post) {
			$list[] = new Post($post['ID_post'], $post['author'], $post['content']);
		  }*/
		  return $req;
		}
	public static function create($name, $description, $price) {
		$db = Db::getInstance();
		$insert = $db->prepare('INSERT INTO products (Name, Description, Price) VALUES (:name, :description, :price)');
		$insert->bindParam(':name', $name, PDO::PARAM_STR);
		$insert->bindParam(':description', $description, PDO::PARAM_STR);
		$insert->bindValue(':price', $price, PDO::PARAM_INT);
		$result = $insert->execute();

		return $result;
	}
	
	public static function search($name) {
		$db = Db::getInstance();
		$name = '%' . $name . '%';
		$req = $db->prepare('SELECT * FROM v_produkt_info WHERE Name LIKE :name ');
		$req->bindParam(':name', $name, PDO::PARAM_STR);
		$req->execute();
		return $req;
	}
	
	
}
?>