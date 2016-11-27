
 
</div>
<footer>
   <a href="<?php echo home_url();?>"><div class="brand">Funky <span>Foodies</span></div></a>
     <?php 
		    
			 $args = array(
				  
				   'theme_location' => 'footer'
			      
			 );
			 
		   
		  ?>
		 <?php wp_nav_menu( $args );?>
  <ul class="social-links">
    <li><a href=""><i class="fa fa-facebook-official"></i></a></li>
     <li><a href=""><i class="fa fa-twitter"></i></a></li>
     <li><a href=""><i class="fa fa-instagram"></i></a></li>
  </ul>
  <p class="cool">Made with <i class="fa fa-heart"></i> by SuryaKavutarapu</p>
</footer>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
    <script  src="<?php bloginfo('template_directory');?>/scripts/instagram.js"></script>
    <script  src="<?php bloginfo('template_directory');?>/scripts/app.js"></script>
<?php wp_footer(); ?> 
  </body>
</html>