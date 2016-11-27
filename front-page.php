<?php get_header(); ?>
<section class="home" id="home">
     <img src="<?php bloginfo('template_directory');?>/img/333H.jpg" alt="Funky Foodies"/>
     <h1>1.Funky Foodies</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam debitis eos cumque aperiam nulla amet unde deleniti quisquam minima atque nihil quibusdam iure modi dolores, ullam harum, eaque natus et.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam debitis eos cumque aperiam nulla amet unde deleniti quisquam minima atque nihil quibusdam iure modi dolores, ullam harum, eaque natus et.</p>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam debitis eos cumque aperiam nulla amet unde deleniti quisquam minima atque nihil quibusdam iure modi dolores, ullam harum, eaque natus et.</p>
<a href="https://www.instagram.com/kavutarapusurya/" class="btn btn-rounded btn-cool btn-sm">Visit Our Blog</a>
</section>

<section>
    <h1>2.Our Featured Posts</h1> 
      <div class="featured">
            <?php
     $statusPosts = new WP_Query('cat=13&posts_per_page=3');
     
     if($statusPosts->have_posts()) : 
        while($statusPosts->have_posts()) : $statusPosts->the_post(); ?>
                 <div class="featured-post">
                    <!--title-->
                   <div class="ftitle"><i>Funky Foodies</i><br /><em>"<?php the_title(); ?>"</em></div>
                   <!--date-->
                   <span><?php the_time('F jS, Y') ?></span>
                   <!--Excerpt-->
                   <p><?php echo get_the_excerpt(); ?></p>
                   <!--read-more button-->
                   <p><a href="<?php the_permalink();?>" class="btn btn-square btn-romantic btn-xs">View Full post</a></p>
                 </div>       
         <?php endwhile;
     else:?>
        <p>No Featured posts Found<p>
   <?php endif;?>
            
      </div> 
</section>






<section class="aboutus" id="aboutus">
<h1>3.About US</h1>
<video width="100%" controls>
  <source src="<?php bloginfo('template_directory');?>/videos/Egg-Shop.mp4" type="video/mp4">
  <source src="<?php bloginfo('template_directory');?>/videos/Egg-Shop.ogg" type="video/ogg">
Your browser does not support the video tag.
</video>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam debitis eos cumque aperiam nulla amet unde deleniti quisquam minima atque nihil quibusdam iure modi dolores, ullam harum, eaque natus et.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam debitis eos cumque aperiam nulla amet unde deleniti quisquam minima atque nihil quibusdam iure modi dolores, ullam harum, eaque natus et.</p>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam debitis eos cumque aperiam nulla amet unde deleniti quisquam minima atque nihil quibusdam iure modi dolores, ullam harum, eaque natus et.</p>
<a href="https://www.instagram.com/kavutarapusurya/" class="btn btn-rounded btn-cool btn-sm">who We are?</a>
</section>

<section id="InstaFeed">
      <h1>4.Our Insta Feed</h1>
      <div class="insta-container">
                  <div id="instagram"></div>
      </div>
      <a href="https://www.instagram.com/kavutarapusurya/" class="btn btn-rounded btn-cool btn-sm">Follow Us On Instagram</a>
</section> 

<section>
   <div class="dashed-post">
     
        <h1>5.Our Status Updates</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam debitis eos cumque aperiam nulla amet unde deleniti quisquam minima atque nihil quibusdam iure modi dolores, ullam harum, eaque natus et.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam debitis eos cumque aperiam nulla amet unde deleniti quisquam minima atque nihil quibusdam iure modi dolores, ullam harum, eaque natus et.</p>
    <?php
     $statusPosts = new WP_Query('cat=5&posts_per_page=2');
     
     if($statusPosts->have_posts()) : 
        while($statusPosts->have_posts()) : $statusPosts->the_post(); 
               get_template_part('content',get_post_format()); 
         endwhile;
     else:?>
        <p>No posts Found<p>
   <?php endif;?>
   </div>
</section>
<?php get_footer();?>