	<!-- Footer Section -->
	<div class="footer_container">

		<div class="footer page_width">	
			
				<div class="footer_left">  		          
			        <?php dynamic_sidebar('footer_1'); ?>
			    </div>

			    <div class="footer_mid_1">
			        <?php dynamic_sidebar('footer_2'); ?>
			    </div>
			           
			    <div class="footer_mid_2">
			        <?php dynamic_sidebar('footer_3'); ?>
			    </div>
			    <div class="footer_mid_3">
			        <?php dynamic_sidebar('footer_4'); ?>
			    </div>

			    <div class="footer_right">
			        <?php dynamic_sidebar('footer_5'); ?>
			    </div>

				<div class="clear"></div>
			
		</div>

		<!-- <?php echo do_shortcode('[social_icons]'); ?>	 -->

	</div>

	<div class="footer_copyright_container">
		<div class="footer_copyright page_width" >
				<!-- Logo Section --> 
	                <!--<img src="<?php bloginfo('stylesheet_directory'); ?>/images/mt-logo.png" width="100%" height="100%">-->		    			    	
		    		<!-- <p>Company Name © Copyright 2018 | Desing By SkT</p>	    		 -->

		    		<p style="float:left;"><?php echo of_get_option('footer_copyright_text'); ?></p>
		    		<p style="float:left;"><?php echo do_shortcode('[social_icons]'); ?></p>
		    		<div style="clear: both;"></div>

	            <!-- -->
		    </div>  
	</div>

	<?php  wp_footer(); ?>	
	</body>
</html>