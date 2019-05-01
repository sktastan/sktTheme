<?php get_header();  ?>	
	<section>		
		<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post();?>	
		
			<?php  		
			if(is_home()){?>
				<!-- <p style="color:lightblue">This is Post page(Post)</p> -->
				<p style="color:red"><?php the_content() ?></p> <div style="margin:20px">
				<a href="<?php echo get_page_link($post->ID) ?>">More Read...</a>
			</div>		
			<?php }			
			else if(is_front_page()){?>
				<?php the_content(); ?>
			<?php }	?>				
			
		<?php endwhile; 
		endif; ?>

		<!-- <ul>
			<?php wp_list_pages( array( 'title_li' => '' ) ); ?>
		</ul> -->	
	<?php get_sidebar(); ?>
	</section>
<?php get_footer(); ?>