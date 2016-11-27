<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <h2><?php the_title(); ?></h2>
      
            <p><?php the_content('Continue Reading'); ?></p>
            
            <!--<span><?php the_time('F jS, Y') ?><em>-- by <a href="<?php get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author() ?></a></em></span>-->
          
      
      <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; ?>
<?php get_footer();?>