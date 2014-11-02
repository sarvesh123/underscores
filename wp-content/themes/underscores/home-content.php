<?php
/**
 * @package underscores
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('home-gallery'); ?>>
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
</article>