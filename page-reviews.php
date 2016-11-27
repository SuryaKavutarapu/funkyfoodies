<?php get_header();?>

<h3><?php the_title();?></h3>

<?php
     $reviewPosts = new WP_Query('cat=7');
     
     if($reviewPosts->have_posts()) : 
        while($reviewPosts->have_posts()) : $reviewPosts->the_post(); 
               get_template_part('content'); 
         endwhile;
     else:?>
        <p>No posts Found<p>
   <?php endif;?>

<?php get_footer();?>