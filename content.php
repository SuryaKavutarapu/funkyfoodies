 <article>
            <a href="<?php the_permalink();?>">
            <div class="post">
            <h2><?php the_title(); ?></h2>
      
               
                  <!--<?php the_post_thumbnail(); ?>-->
                  <p><?php echo get_the_excerpt(); ?></p>
                  <p><a href="<?php the_permalink();?>">read more &raquo;</a></p>
            
             <span><?php the_time('F jS, Y') ?> |  <em>-- by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author() ?></a></em>
              
               |  <em>Categorised by </em><?php 
                   $categories = get_the_category();
                   $seperator = ", ";
                   $output = "";
                   
                   if($categories){
                         foreach($categories as $category){
                               $output .= '<a href="'.get_category_link($category->term_id).'">'.$category->cat_name .'</a>'.$seperator;
                         }
                   }
                    echo trim($output,$seperator);
              ?>
             </span>
             
            </div>
           </a>
</article>