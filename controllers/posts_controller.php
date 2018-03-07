<?php
  class PostsController {
    public function index() {
      // we store all the posts in a variable
	  $posts = array();
      $posts_list = PostRepository::all();
	  
	  //var_dump($posts_list);
	   foreach($posts_list->fetchAll() AS $post)
        {
            $posts[] = new Post($post['ID_post'], $post['author'], $post['content']);
        }
	  
      require_once('views/posts/index.php');
    }

    public function show() {
      // we expect a url of form ?controller=posts&action=show&id=x
      // without an id we just redirect to the error page as we need the post id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      // we use the given id to get the right post
      $posts_list = PostRepository::find($_GET['id']);
		$posts = array();
	 
      foreach ($posts_list->fetchAll() AS $post)
		{
			var_dump($post['ID_post']);
			var_dump($post['author']);
			var_dump($post['content']);
			$posts[] = new Post($post['ID_post'], $post['author'], $post['content']);
		}
				
	 
      require_once('views/posts/show.php');
    }
  }
?>