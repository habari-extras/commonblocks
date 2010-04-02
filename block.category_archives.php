<h3>Category Archives</h3>
<ul>
  <?php foreach( $content->categories as $category ): ?>
    <li>
	<a href="<?php echo $category[ 'url' ]; ?>" title="View entries in the '<?php
		echo $category[ 'category' ];
	?>' category"><?php
		echo $category[ 'category' ] . $category[ 'count' ];
	?></a>
    </li>
  <?php endforeach; ?>
</ul>