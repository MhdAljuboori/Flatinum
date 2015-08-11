<?php
get_header(); ?>

<div class="container text-center page-not-found">
    <h1><i class="fa fa-frown-o"></i> <?php _e( '404 !', 'theme_test' ); ?></h1>
    <h3><?php _e( 'Page Not Found !', 'theme_test' ); ?></h3>
    <p><?php _e( 'Go back to', 'theme_test' ); ?>
        <a href="<?php echo esc_url( get_site_url() ); ?>"><?php _e( 'home', 'theme_test' ); ?></a>
        <?php _e( 'page', 'theme_test' ); ?>
    </p>
</div>

<?php get_footer(); ?>