<script type="text/javascript">

	jQuery(document).ready(function(){

		jQuery('#pic_feature_content_headline_text p span').append('<?php  echo of_get_option( "pic_feature_headline_txt"); ?>');

	});

</script>

<style type="text/css">

	.skt_pic_ico_txt{
		padding: <?php  echo of_get_option( "pic_feature_padding"); ?>; 
	}

	.skt_pic_txt p:nth-child(1){
		color: <?php  echo of_get_option( "link_color"); ?>;
	}

	.skt_pic_txt p:nth-child(3) a{    
	    color: <?php  echo of_get_option( "link_color"); ?>;
	}

	.skt_pic_txt p:nth-child(3) a:hover{    
	    color: <?php  echo of_get_option( "link_hover_color"); ?>;
	}
	 
</style>