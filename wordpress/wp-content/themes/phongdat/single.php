<?php get_header(); ?>
<div class="content">
	<div class="main-content">
	<?php
	if(have_posts()) : while(have_posts()) : the_post() ;
		get_template_part('content', get_post_format());

		endwhile;
		endif;
	?>
	</div>
	<div class="siderbar"></div>

</div>

<?php get_footer(); ?>