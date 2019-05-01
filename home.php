<?php get_header();

	global $post; ?>

	<h1><?php single_post_title(); ?></h1> 

	<section>		
		<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>	
		
			<h2><?php the_title(); ?></h2>
			<?php $con = get_the_content(); $trim_content = wp_trim_words( $con , 100, '...' ); 
				echo $trim_content;
			?><br />

			<a href="<?php echo get_page_link($post->ID) ?>"> Read More...</a><br />			
			
		<?php endwhile; ?>
		<?php endif; ?>

	<?php get_sidebar(); ?>		
	</section>

<?php get_footer(); ?>