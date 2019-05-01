<script type="text/javascript">            

	//--------------------------------------------------------------------------------//

	//								Portfolio style

	//--------------------------------------------------------------------------------//

	jQuery(document).ready(function(){
		
		jQuery('#portfolio_headline_text p span').append('<?php  echo of_get_option( "portfolio_headline_text"); ?>');

	});
	
</script>

<style type="text/css">

	#portfoliolist{
	 	background-color: <?php echo of_get_option( 'portfolio_bgcolor', '#000' ); ?>;
	}
	
	.portfolio .label-bg{	      
	    background-color: <?php echo of_get_option( 'portfolio_label_bgcolor', '#000' ); ?>;	     
	}

	#filters {
		background-color:  <?php echo of_get_option( 'portfolio_filter_bgcolor', '#000' ); ?>;
	}

	#filters li span:hover, #filters li span.active{	      
	    background-color: <?php echo of_get_option( 'portfolio_label_bgcolor', '#000' ); ?>;	     
	}	

</style>