<?php
	class PostRepository {
		public static function all() {
		  $list = [];
		  $db = Db::getInstance();
		  $req = $db->query('SELECT * FROM posts');

		  // we create a list of Post objects from the database results
		  /*foreach($req->fetchAll() as $post) {
			$list[] = new Post($post['ID_post'], $post['author'], $post['content']);
		  }*/

		  return $req;
		}

		public static function find($id) {
		  $db = Db::getInstance();
		  // we make sure $id is an integer
		  $id = intval($id);
		  $req = $db->prepare('SELECT * FROM posts WHERE ID_post = :id');
		  // the query was prepared, now we replace :id with our actual $id value
		  $req->execute(array('id' => $id));
			return $req;

		  //return new Post($post['ID_post'], $post['author'], $post['content']);
		}
	}
?>