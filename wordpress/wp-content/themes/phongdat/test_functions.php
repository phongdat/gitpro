<?php
//ham hien thi site-name, site-logo -dung ham printf nhe
//Neu la trang is_home, hoac is_front_page thi hien thi the h1, con khong phai thi hien thi the p
if(!function_exists('phongdat_header')) {
	function phongdat_header(){

		if(is_home() || is_front_page()) {
	printf('<h1><a href="%1$s" title="%2$s">%3$s</a></h1>',
			get_bloginfo('url');
			get_bloginfo('description');
			get_bloginfo('sitename')
		);
   } else {
	printf('<p><a href="%1$s" title="%2$s">%3$s</a></p>',
			get_bloginfo('url');
			get_bloginfo('description');
			get_bloginfo('sitename')
		);
}

	}
}

//ham hien thi tieu de
if(!function_exists('phongdat_entry_title')) {
	function phongdat_entry_title(){
		if(is_single()){ ?>
			<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></h1>
		<?php } else { ?>
			<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></h2>
		<?php }
	}
}

// ham hien thi thumbnail
if(!function_exists('phongdat_thumbnail')){
	function phongdat_thumbnail(){
		if(!is_single() && has_post_thumbnail() && !post_password_required() || has_post_format('image')) { ?>
			<figure class="img-thumbnail"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></figure>
		<?php }
	}
}


?>

