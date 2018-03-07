<p>This is the requested post:</p>
<?php
	foreach($posts AS $post) {
?>
		
	<p><?php echo $post->getAuthor(); ?></p>
	<p><?php echo $post->getContent(); ?></p>

<?php
}	
?>

