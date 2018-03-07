<p>Here is a list of all posts:</p>

<?php foreach($posts as $post) { ?>
  <p>
    <?php echo $post->getAuthor(); ?>
    <a href='?controller=posts&action=show&id=<?php echo $post->getID(); ?>'>See content</a>
  </p>
<?php } ?>