<?php
get_header(); ?>

<div class="container">
    <?php if ( have_posts() ) : ?>
        <?php $item_number = 0; ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="col-sm-6 col-md-4"> 
                <div class="thumbnail">
                    <?php 
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail( 'large', array(
                          'class' => 'attachment-large wp-post-image'
                        ) );
                        }
                         ?>                                 
                    <div class="caption"> 
                        <h3><?php the_title(); ?></h3> 
                        <p><?php the_content(); ?></p> 
                    </div>                                 
                </div>                             
            </div>
            <?php $item_number++; ?>
            <?php if( $item_number % 2 == 0 ) echo '<div class="clearfix visible-sm-block"></div>'; ?>
            <?php if( $item_number % 3 == 0 ) echo '<div class="clearfix visible-md-block visible-lg-block"></div>'; ?>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>
</div>            

<?php get_footer(); ?>