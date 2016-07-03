<?php do_action('before_content'); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-thumbnail">
		<?php phongdat_thumbnail('thumbnail'); ?>
	</div>
	<div class="entry-title">
		<?php phongdat_entry_title(); ?>
	</div>
	<div class="entry-content">
		<?php phongdat_entry_content(); ?>
	</div>
</article>


