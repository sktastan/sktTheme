<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php echo of_get_option( 'page_title' ); ?>
    </title>

    <?php wp_head(); ?>
    <?php include_once('lib/skt_general_style.php'); ?>
    <?php include_once('lib/header/skt_header_style.php'); ?>
    <?php include_once('lib/menu/skt_menu_style.php'); ?>
    <?php include_once('lib/slider/skt_slider_style.php'); ?>

    <?php include_once('lib/feature_content/skt_feature_content_style.php'); ?>
    <?php include_once('lib/pic_feature_content/skt_pic_feature_content_style.php'); ?>    
    <?php include_once('lib/portfolio/skt_portfolio_style.php'); ?>
    
    <?php include_once('lib/footer/skt_footer_style.php'); ?>
    <?php include_once('lib/autoscroll/skt_autoscroll_style.php'); ?>
    <?php include_once('lib/social/skt_social_style.php'); ?>

</head>

<body <?php body_class(); ?>>
    <!-- Header Section -->
   <div id="go_top"><i class="fas fa-angle-double-up"></i></div>
   <!--  <?php echo do_shortcode('[preloader]'); ?> -->
    
    <!-- Sticky Header Section -->
    <div class="scroller-anchor"></div>

    <div class="header_container scroller">

        <div class="header page_width">

            <div class="logo"><img src='<?php echo get_template_directory_uri() . " /images/logo.jpg"  ?>' alt="logo.jpg"> </div>            

            <label for="show-menu" class="show-menu"><i class="fa fa-bars fa-2x"></i></label>
            <input type="checkbox" id="show-menu" />
            
            <!-- Main Menu-->
            <?php         
                $args = array(
                    'theme_location'  => 'primary',
                    'menu'            => 'primary',
                    'container'       => '',
                    'container_class' => '',                           
                    'menu_id'         => '',
                    'menu_class'      => 'sktMenu'
                );             
                wp_nav_menu($args);                       
            ?>

            <div class="copyRight">CopyRight @Skt 2018</div>
        </div>

    </div>

    <?php echo do_shortcode('[skt_slider]'); ?>
    <!-- <?php echo do_shortcode('[custom_post_plugin_shortcode]'); ?> -->

    <?php
        /**
         * Detect plugin. For use on Front End only.
         */
        include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
        // check for plugin using plugin name
        if ( is_plugin_active( 'demo_custom_metabox/custom_metabox.php' ) ) {
            //plugin is activated 
            echo do_shortcode('[custom_post_metabox_shortcode]');
        } 

        if ( is_plugin_active( 'demo_generator/demo_gen.php' ) ) {
            //plugin is activated 
            echo do_shortcode('[ourTeameDemoShortCode]');
        } 
    ?>