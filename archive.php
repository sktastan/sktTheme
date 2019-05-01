<?php 

	global $post;
	
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();?>

			<h2><?php the_title(); ?></h2>

			<?php the_content(); 			

		}
	} else {
		$output .='<p style="border: 1px solid #e1e1e1;margin:20px;padding:30px;font-size:200%; text-align:center; color:orange">There are no posts</p>';
	}

	wp_reset_postdata();

	echo $output;

?>