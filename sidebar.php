<?php dynamic_sidebar( 'sidebar-job' ); ?>

<?php
    global $post;
    dynamic_sidebar( 'widget_area_for_page_'.$post->post_name );
?>