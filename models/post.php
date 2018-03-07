<?php
  class Post {
    // we define 3 attributes
    // they are public so that we can access them using $post->author directly
    protected $id;
    protected $author;
    protected $content;

    public function __construct($id, $author, $content) {
      $this->setID($id);
      $this->setAuthor($author);
      $this->setContent($content);
    }
	
	public function setID($id) {
		$this->id = $id;
	}
	public function setAuthor($author) {
		$this->author = $author;
	}
	public function setContent($content) {
		$this->content = $content;
	}
   
	public function getID() {
		return $this->id;
	}
	public function getAuthor() {
		return $this->author;
	}
	public function getContent() {
		return $this->content;
	}
  }
?>